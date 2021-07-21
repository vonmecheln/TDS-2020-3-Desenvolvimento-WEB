<?php

namespace Tds\CadAluno\Model;

class ModelAluno
{
    private $id;
    private $nome;
    private $matricula;

    function __construct()
    {
        $this->id = 0;
        $this->nome = "";
        $this->matricula = "";
    }

    public function getId(){
        return $this->id;
    }
    
    public function setId($id){
        $this->id = $id;
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
