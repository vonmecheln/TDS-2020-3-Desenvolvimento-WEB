<?php

require_once 'vendor/autoload.php';

use Tds\CadAluno\View\ViewListaAluno;

$obj = new ViewListaAluno();
echo $obj->show();

?>