<?php

namespace Tds\CadAluno\Model;

class ModelAluno
{
    private $nome;
    private $matricula;

    function __construct()
    {
        $this->nome = "";
        $this->matricula = "";
    }

    public function getNome(){
        return $this->nome;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }


    public function getMatricula(){
        return $this->matricula;
    }
    
    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }

}
