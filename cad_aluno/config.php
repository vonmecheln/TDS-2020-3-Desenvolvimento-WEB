<?php

use Tds\CadAluno\Banco\Database;

$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();
$dotenv->required('APP_ENV');

if (getenv('APP_ENV') == "dev") {
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();        
}

$dotenv->required(['DB_DRIVER', 'DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASS']);

//inicializa conexão com banco
new Database();