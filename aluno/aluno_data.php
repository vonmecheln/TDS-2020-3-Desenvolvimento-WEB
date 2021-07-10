<?php

    class AlunoBase {

        protected $conexao;

        function __construct(){
            require 'conexao.php';
            $conObj = New Conexao();
            $this->conexao = $conObj->getConexao();
        }
    
    }

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
    
    class InserirAluno extends AlunoBase{

        private $nome;
        private $matricula;

        function __construct($nome, $matricula){
            $this->nome = $nome;
            $this->matricula = $matricula;
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
    
