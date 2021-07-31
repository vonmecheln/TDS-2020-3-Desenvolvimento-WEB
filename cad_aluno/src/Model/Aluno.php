<?php

namespace Tds\CadAluno\Model;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Aluno extends Eloquent
{
    
    protected $fillable = ['nome', 'matricula'];

}


?>