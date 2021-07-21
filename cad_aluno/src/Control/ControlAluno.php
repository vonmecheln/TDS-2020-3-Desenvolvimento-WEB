<?php

namespace Tds\CadAluno\Control;

use Tds\CadAluno\DAO\BuscarAluno;
use Tds\CadAluno\DAO\InserirAluno;
use Tds\CadAluno\Model\ModelAluno;

class ControlAluno
{

    function ListarAlunos(){
        $dao = new BuscarAluno();
        $retorno = $dao->exec();
        return $retorno;
    }

    function InserirAluno(ModelAluno $aluno){

        if(empty($aluno->getNome())){
            throw new \Exception("Erro ao inserir Aluno, o Nome é Obrigatório", 1);            
        } else if(strlen($aluno->getNome()) <= 3){
            throw new \Exception("Erro ao inserir Aluno, o Nome deve ter mais de três letras", 1);            
        }

        if(empty($aluno->getMatricula())){
            throw new \Exception("Erro ao inserir Aluno, a Matricula é Obrigatória", 1);            
        } else if(!is_numeric($aluno->getMatricula())){
            throw new \Exception("Erro ao inserir Aluno, a Matricula deve conter apenas números", 1);            
        }

        $dao = new InserirAluno($aluno);
        $dao->exec();
    }
    
}
