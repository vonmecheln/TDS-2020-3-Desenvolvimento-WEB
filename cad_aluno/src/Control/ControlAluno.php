<?php

namespace Tds\CadAluno\Control;

use Tds\CadAluno\DAO\BuscarAluno;
use Tds\CadAluno\DAO\InserirAluno;
use Tds\CadAluno\Model\Aluno;
use Tds\CadAluno\Model\ModelAluno;

class ControlAluno
{

    function ListarAlunos(){
        
        $alunos = Aluno::orderby('nome', 'ASC')
        ->get();    
                
        return $alunos;
    }

    function InserirAluno(Aluno $aluno){

        if(empty($aluno->nome)){
            throw new \Exception("Erro ao inserir Aluno, o Nome é Obrigatório", 1);            
        } else if(strlen($aluno->nome) <= 3){
            throw new \Exception("Erro ao inserir Aluno, o Nome deve ter mais de três letras", 1);            
        }

        if(empty($aluno->matricula)){
            throw new \Exception("Erro ao inserir Aluno, a Matricula é Obrigatória", 1);            
        } else if(!is_numeric($aluno->matricula)){
            throw new \Exception("Erro ao inserir Aluno, a Matricula deve conter apenas números", 1);            
        }

        $aluno->save();

    }
    
}
