<?php

use Tds\CadAluno\Control\ControlAluno;
use Tds\CadAluno\Model\Aluno;

require_once 'vendor/autoload.php';

$aluno = new Aluno();

if(isset($_GET['campo_nome'])){
    $aluno->nome = $_GET['campo_nome'];
}

if(isset($_GET['campo_matricula'])){
    $aluno->matricula = $_GET['campo_matricula'];
}

$control = new ControlAluno();
$control->InserirAluno($aluno);

echo "ok";