<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 

    $alunos = [];
    
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

    $sql = "SELECT * FROM aluno ORDER BY nome DESC";

    try {
        $stmt = $conexao->prepare($sql);
        $stmt->execute();
    } catch (\Throwable $th) {
        var_dump($th);
    }

    if($stmt->setFetchMode(PDO::FETCH_ASSOC)){
        $result = $stmt->fetchAll();
        
        if($result !== false){
            
            foreach ($result as $row) {
                $alunos[] = $row['nome'];
            }

        }
        
    }

    
    foreach ($alunos as $key => $aluno) {
        echo $aluno . "<br>". "\n";
    }

    echo "<ul>";
    foreach ($alunos as $key => $aluno) {
        echo "<li>" .$aluno . "</li>". "\n";
    }
    echo "</ul>";


    echo "<table>
    <tr><td>Nº</td><td>Nome</td></tr>
    ";
    foreach ($alunos as $key => $aluno) {

        echo "<tr>";
        echo "    <td>". $key ."</td>";
        echo "    <td>". $aluno ."</td>";
        echo "</tr>";

    }
    echo "</table>";

    ?>

    <table>
        <tr>
            <td>Nº</td>
            <td>Nome</td>
        </tr>
        <?php  foreach ($alunos as $key => $aluno) {  ?>
        <tr>
            <td><?php echo $key ?></td>
            <td><?php echo $aluno ?></td>
        </tr>
        <?php } ?>
    </table>

    

</body>

</html>