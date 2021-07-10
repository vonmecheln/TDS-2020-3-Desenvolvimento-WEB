<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    
    <form action="cadastrar.php" method="GET">

        <label for="campo_nome">Nome:</label>
        <input type="text" name="campo_nome" id="campo_nome">

        <label for="campo_descricao">Matricula</label>
        <input type="text" name="campo_matricula" id="campo_matricula">

        <button type="submit" class="btn">Salvar</button>
    </form>

</body>
</html>