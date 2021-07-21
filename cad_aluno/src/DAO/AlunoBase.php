<?php

namespace Tds\CadAluno\DAO;

class AlunoBase {

    protected $conexao;

    function __construct(){

        $conObj = new Conexao();
        $this->conexao = $conObj->getConexao();
    }

}

?>