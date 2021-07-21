<?php

use Tds\CadAluno\Control\ControlAluno;
use Tds\CadAluno\Model\ModelAluno;
use Tds\CadAluno\View\ViewListaAluno;

require_once 'vendor/autoload.php';


$aluno = new ModelAluno();
$aluno->setNome("Aluno teste - 3");
$aluno->setMatricula("123");

$obj = new ViewListaAluno();

echo $obj->show();


?>