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

    echo "<pre>";
    try {
        $conexao = new PDO(
            "mysql:host=localhost;dbname=IFPR",
            "app_site_ifpr",
            "app_site_ifpr");
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);        
    } catch (\Throwable $th) {
        var_dump($th);
    }

    $sql = "INSERT INTO aluno (nome, matricula) VALUES (:nome, :matricula) ";
    
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':matricula', $matricula);

    try {
        $stmt->execute();
    } catch (\Throwable $th) {
        var_dump($th);        
    }


?>