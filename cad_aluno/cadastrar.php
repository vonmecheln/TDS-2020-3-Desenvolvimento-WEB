<?php

use Tds\CadAluno\Control\ControlAluno;
use Tds\CadAluno\Model\ModelAluno;

require_once 'vendor/autoload.php';

$aluno = new ModelAluno();

if(isset($_GET['campo_nome'])){
    $aluno->setNome($_GET['campo_nome']);        
}

if(isset($_GET['campo_matricula'])){
    $aluno->setMatricula($_GET['campo_matricula']);       
}

$control = new ControlAluno();
$control->InserirAluno($aluno);

echo "ok";