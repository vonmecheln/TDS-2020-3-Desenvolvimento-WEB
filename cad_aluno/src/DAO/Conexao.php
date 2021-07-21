<?php

namespace Tds\CadAluno\DAO;

class Conexao {

    private $server;
    private $dbname;
    private $user;
    private $password;
    private $conPDO;

    function __construct() {
        
        $this->server = "localhost";
        $this->dbname = "IFPR";
        $this->user = "app_site_ifpr";
        $this->password = "app_site_ifpr";

        $this->createConection();
    }

    private function createConection(){

        $cs = "mysql:";
        $cs .= "host=". $this->server;
        $cs .= ";dbname=" . $this->dbname;

        try {
            $this->conPDO = new \PDO($cs, $this->user, $this->password);
            $this->conPDO->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);        
        } catch (\Throwable $th) {
            var_dump($th);
        }

    }

    function getConexao(){
        return $this->conPDO;
    }


}

