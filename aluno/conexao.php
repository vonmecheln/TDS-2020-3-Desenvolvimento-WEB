<?php

function getConexao(){

    try {
        $conexao = new PDO(
            "mysql:host=localhost;dbname=IFPR",
            "app_site_ifpr",
            "app_site_ifpr");
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);        
    } catch (\Throwable $th) {
        var_dump($th);
    }

    return $conexao;
}

