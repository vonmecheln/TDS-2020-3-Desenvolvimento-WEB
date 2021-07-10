<?php

    function buscarAlunos(){

        require 'conexao.php';

        $conexao = getConexao();
        
        $sql = "SELECT * FROM aluno ORDER BY nome DESC";

        try {
            $stmt = $conexao->prepare($sql);
            $stmt->execute();
        } catch (\Throwable $th) {
            var_dump($th);
        }

        $alunos = [];
        if($stmt->setFetchMode(PDO::FETCH_ASSOC)){
            $result = $stmt->fetchAll();        
            if($result !== false){
                
                foreach ($result as $row) {
                    $alunos[] = $row['nome'];
                }
            }        
        }

        return $alunos;
    }

function inserirAluno($nome, $matricula){

    require 'conexao.php';
    $conexao = getConexao();

    $sql = "INSERT INTO aluno (nome, matricula) VALUES (:nome, :matricula) ";
    
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':matricula', $matricula);

    try {
        $stmt->execute();
    } catch (\Throwable $th) {
        var_dump($th);        
    }

}