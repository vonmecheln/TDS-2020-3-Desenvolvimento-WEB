<?php

namespace Tds\CadAluno\DAO;

use Tds\CadAluno\Model\ModelAluno;

class InserirAluno extends AlunoBase{

    private $nome;
    private $matricula;

    function __construct(ModelAluno $aluno){

        $this->nome = $aluno->getNome();
        $this->matricula = $aluno->getMatricula();
        parent::__construct();
    }
    
    function exec(){
        
        $sql = "INSERT INTO aluno (nome, matricula) VALUES (:nome, :matricula) ";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':matricula', $this->matricula);

        try {
            $stmt->execute();
        } catch (\Throwable $th) {
            var_dump($th);        
        }
    }

}

?>