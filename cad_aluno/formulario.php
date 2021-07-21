<?php

require_once 'vendor/autoload.php';

use Tds\CadAluno\View\ViewFormularioAluno;

$obj = new ViewFormularioAluno();
echo $obj->show();

?>