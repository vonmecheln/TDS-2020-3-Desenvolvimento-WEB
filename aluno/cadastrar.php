<?php
    
    $nome = '';
    $matricula = '';

    if(isset($_GET['campo_nome'])){
        $nome = $_GET['campo_nome'];
    } else {
        //campo obrigatorio
    }

    if(isset($_GET['campo_matricula'])){
        $matricula = $_GET['campo_matricula'];
    } else {
        //campo obrigatorio
    }

    require 'aluno_data.php';
    inserirAluno($nome, $matricula);


?>