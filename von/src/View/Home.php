<?php

namespace Vonmecheln\Teste\View;

use Vonmecheln\Teste\Models\Pergunta;

class Home 
{

    public function show(){

        // $control = new ControlAluno();        
        // $alunos = $control->ListarAlunos();

        $perguntas = Pergunta::with('user')
            ->with('respostas', function($query){
                $query->with('user')->with('votos', function($query){
                    $query->with('user');
                });
            })
            ->get();

            dump($perguntas); die();

        $latte = new \Latte\Engine;
        $latte->setTempDirectory(getenv('HTML_TEMP_DIR'));

        $params = [
            'title' => 'Lista de Alunos',
            'perguntas' => $perguntas,
        ];

        $html = $latte->renderToString('src/View/templates/home.latte', $params);
        return $html;

    }
}


?>