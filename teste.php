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

    //Fazer um script em PHP para exibir os vinte primeiro número da sequencia de Fibonacci
    
    $alunos[] = "Adriano Passos";
    $alunos[] = "Alan Junior";
    $alunos[] = "Charles Nascimento";
    $alunos[] = "Donizete Schadeck";
    $alunos[] = "Guilherme Belotto";
    $alunos[] = "Ivanilson Silva";
    $alunos[] = "João Paulo de Rezende";
    $alunos[] = "Jorge Souza";
    $alunos[] = "Luana Kaoma";
    $alunos[] = "Matheus Fedel";
    $alunos[] = "Oliver Pedroso";
    $alunos[] = "Roberto carlos Mendonça";
    $alunos[] = "Thiago Silvestre Reinaldo";
    
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