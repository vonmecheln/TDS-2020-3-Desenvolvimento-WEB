<?php

use Vonmecheln\Teste\Models\Pergunta;
use Vonmecheln\Teste\Models\Resposta;
use Vonmecheln\Teste\Models\User;
use Vonmecheln\Teste\Models\Voto;

$user1 = User::create(['name'=>'vonmecheln','email'=>'luis.vonmecheln@ifpr.edu.br','password'=>'123456']);
$user2 = User::create(['name'=>'renato','email'=>'renato.estevam@pratti.com','password'=>'123456']);
$user3 = User::create(['name'=>'charles','email'=>'charles@email.com.br','password'=>'123456']);
$user4 = User::create(['name'=>'guilherme','email'=>'guilhermen@email.com.br','password'=>'123456']);
$user5 = User::create(['name'=>'luana','email'=>'luana@email.com.br','password'=>'123456']);
$user6 = User::create(['name'=>'anonimo','email'=>'anonimo@email.com.br','password'=>'123456']);

$pergunta1 = Pergunta::create(['user_id'=>$user1->id, 'pergunta'=>'O que é PHP?']);
$resposta1 = Resposta::create(['user_id'=>$user2->id, 'pergunta_id'=> $pergunta1->id, 'resposta'=>'PHP é uma linguagem da web baseada em scripts que permite aos desenvolvedores criar dinamicamente páginas da web']);
$resposta2 = Resposta::create(['user_id'=>$user6->id, 'pergunta_id'=> $pergunta1->id, 'resposta'=>'O PHP (um acrônimo recursivo para PHP: Hypertext Preprocessor )']);

$voto1 = Voto::create(['user_id'=>$user1->id, 'resposta_id'=>$resposta1->id]);
$voto2 = Voto::create(['user_id'=>$user2->id, 'resposta_id'=>$resposta1->id]);
$voto3 = Voto::create(['user_id'=>$user3->id, 'resposta_id'=>$resposta1->id]);
$voto4 = Voto::create(['user_id'=>$user4->id, 'resposta_id'=>$resposta1->id]);
$voto5 = Voto::create(['user_id'=>$user5->id, 'resposta_id'=>$resposta1->id]);
$voto6 = Voto::create(['user_id'=>$user6->id, 'resposta_id'=>$resposta2->id]);


?>