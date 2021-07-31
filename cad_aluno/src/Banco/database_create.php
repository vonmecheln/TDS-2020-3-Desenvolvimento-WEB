<?php

use Illuminate\Database\Capsule\Manager as Capsule;

//aluno
Capsule::schema()->create('alunos', function ($table) {
       $table->increments('id');
       $table->string('nome');
       $table->string('matricula')->unique();
       $table->timestamps();
});

?>