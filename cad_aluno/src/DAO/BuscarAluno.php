<?php

namespace Tds\CadAluno\DAO;

use Tds\CadAluno\Model\ModelAluno;

class BuscarAluno extends AlunoBase{
                
    function exec(){
    
        $sql = "SELECT * FROM aluno ORDER BY nome DESC";

        try {
            $stmt = $this->conexao->prepare($sql);
            $stmt->execute();
        } catch (\Throwable $th) {
            var_dump($th);
        }

        $alunos = [];
        if($stmt->setFetchMode(\PDO::FETCH_ASSOC)){
            $result = $stmt->fetchAll();        
            if($result !== false){
                
                foreach ($result as $row) {
                    $aluno = new ModelAluno();
                    $aluno->setId($row['id']);
                    $aluno->setNome($row['nome']);
                    $aluno->setMatricula($row['matricula']);
                    $alunos[] = $aluno;
                }
            }        
        }

        return $alunos;
        
    }
}

?>