<?php

require_once 'vendor/autoload.php';

if(isset($_GET['create_db'])){
    require 'src/Banco/database_create.php';
    header("location: /tds/cad_aluno/");
}

if(isset($_GET['init_db'])){
    require 'src/Banco/database_seeder.php';
    header("location: /tds/cad_aluno/");
}


use Tds\CadAluno\View\ViewListaAluno;

$obj = new ViewListaAluno();
echo $obj->show();

?>