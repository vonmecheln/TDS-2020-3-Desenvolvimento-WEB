<?php

use Vonmecheln\Teste\View\Home;

require 'vendor/autoload.php';

if (isset($_REQUEST['create_db'])) {
    require 'src/Models/database_create.php';    
    header('location: /von');
    exit;
}

if (isset($_REQUEST['init_db'])) {
    require 'src/Models/database_seeder.php';    
    header('location: /von');
    exit;
}


$obj = new Home();
echo $obj->show();






