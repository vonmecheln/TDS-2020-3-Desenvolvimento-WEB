<?php

use Illuminate\Database\Capsule\Manager as Capsule;

//Usuario
Capsule::schema()->create('users', function ($table) {
       $table->increments('id');
       $table->string('name');
       $table->string('email')->unique();
       $table->string('password');
       $table->string('userimage')->nullable();
       $table->string('api_key')->nullable()->unique();
       $table->rememberToken();
       $table->timestamps();
});

//Perguntas
Capsule::schema()->create('perguntas', function ($table) {
    $table->increments('id');
    $table->string('pergunta');
    $table->integer('user_id')->unsigned();
    $table->timestamps();
    $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');    
});

//Respostas
Capsule::schema()->create('respostas', function ($table) {
    $table->increments('id');
    $table->string('resposta');
    $table->integer('user_id')->unsigned();
    $table->integer('pergunta_id')->unsigned();    
    $table->timestamps();
    $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    $table->foreign('pergunta_id')->references('id')->on('perguntas')->onDelete('cascade');    
});

//Votos Favoráveis
Capsule::schema()->create('votos', function ($table) {
    $table->increments('id');
    $table->integer('user_id')->unsigned();
    $table->integer('resposta_id')->unsigned();
    
    $table->timestamps();
    $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    $table->foreign('resposta_id')->references('id')->on('respostas')->onDelete('cascade');    
});

