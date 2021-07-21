<?php

namespace Tds\CadAluno\View; 

class ViewFormularioAluno
{
    function show(){
    
        $latte = new \Latte\Engine;
        $latte->setTempDirectory('temp_view');

        $params = [];

        $html = $latte->renderToString('src/View/templates/formulario_aluno.latte', $params);
        return $html;
    
    }
}


?>