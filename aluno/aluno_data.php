<?php

    class BuscarAluno{
        
        function exec(){

            require 'conexao.php';
            $testeConObject = new Conexao();
            $conexao = $testeConObject->getConexao();
            
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
    }
    
    class InserirAluno{

        private $nome;
        private $matricula;

        function __construct($nome, $matricula){
            $this->nome = $nome;
            $this->matricula = $matricula;
        }
        
        function exec(){
            require 'conexao.php';
            $testeConObject = new Conexao();
            $conexao = $testeConObject->getConexao();

            $sql = "INSERT INTO aluno (nome, matricula) VALUES (:nome, :matricula) ";
            
            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(':nome', $this->nome);
            $stmt->bindParam(':matricula', $this->matricula);

            try {
                $stmt->execute();
            } catch (\Throwable $th) {
                var_dump($th);        
            }
        }

    }
    
