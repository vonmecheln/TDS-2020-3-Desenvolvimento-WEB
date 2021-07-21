<?php

namespace Tds\CadAluno\View;

use Tds\CadAluno\Control\ControlAluno;

class ViewListaAluno
{
    
    function show(){

        $control = new ControlAluno();
        $alunos = $control->ListarAlunos();

        $latte = new \Latte\Engine;
        $latte->setTempDirectory('temp_view');

        $params = [
            'title' => 'Lista de Alunos',
            'alunos' => $alunos,
        ];

        $html = $latte->renderToString('src/View/templates/lista_aluno.latte', $params);
        return $html;

    }
}


?>