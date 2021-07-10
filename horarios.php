<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<table border="1">
    <tr>
        <td rowspan="2"></td>
        <td colspan="6">TDS2020-1-1SEM</td>
        <td rowspan="2"></td>
    </tr>
    <tr>        
        <td>Segunda-Feira</td>
        <td>Terça-Feira</td>
        <td>Quarta-Feira</td>
        <td>Quinta-Feira</td>
        <td>Sexta-Feira</td>
        <td>Sábado</td>
    </tr>

    <?php

    $aula_1h[] = "Inteligência Artificial e Sistemas Neurais";
    $aula_1h[] = "Desenvolvimento WEB";
    $aula_1h[] = "Desenvolvimento para Dispositivos Móveis";
    $aula_1h[] = "Inteligência Artificial e Sistemas Neurais";
    $aula_1h[] = "Desenvolvimento Baseado em Padrões e Frameworks";
    $aula_1h[] = "---";

    $aula_2h[] = "Programação para Sistemas Embarcados";
    $aula_2h[] = "Desenvolvimento WEB";
    $aula_2h[] = "Desenvolvimento para Dispositivos Móveis";
    $aula_2h[] = "Testes, Verificação e Validação de Sistemas - 723";
    $aula_2h[] = "Desenvolvimento WEB";
    $aula_2h[] = "---";

    $intervalo[] = "-X-";
    $intervalo[] = "-X-";
    $intervalo[] = "-X-";
    $intervalo[] = "-X-";
    $intervalo[] = "-X-";
    $intervalo[] = "-X-";


    $horaio["19:00 - 19:50"] = $aula_1h;
    $horaio["19:50 - 20:40"] = $aula_1h;
    $horaio["Intervalo (20:40 - 21:00)"] = $intervalo;
    $horaio["21:00 - 21:50"] = $aula_2h;
    $horaio["21:50 - 22:40"] = $aula_2h;

    // echo "<pre>";
    // print_r($horaio);
    // echo "</pre>";
    // die();

    
    foreach ($horaio as $periodo => $atividades) {
        echo "<tr>";
        echo "  <td>$periodo</td>";
        foreach ($atividades as $atv) {
            echo "<td>$atv</td>";
        }
        echo "  <td>$periodo</td>";
        echo "</tr>";
    }
    


?>

    <tr>
        <td></td>
        <td colspan="6">Versão 4-2021. Válido a partir de 07/06/2021</td>
        <td></td>
    </tr>

</table>

</body>
</html>

