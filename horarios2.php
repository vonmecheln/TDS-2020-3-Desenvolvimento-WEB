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
    
    $aulas[] = "07:30 - 08:20";
    $aulas[] = "08:20 - 09:10";
    $aulas[] = "Intervalo (09:10 - 09:25)";
    $aulas[] = "09:25 - 10:15";
    $aulas[] = "10:15 - 11:05";
    $aulas[] = "11:05 - 11:55";
    $aulas[] = "Intervalo (11:55 - 13:10)";
    $aulas[] = "13:10 - 14:00";
    $aulas[] = "14:00 - 14:50";
    $aulas[] = "Intervalo (14:50 - 15:05)";
    $aulas[] = "15:05 - 15:55";
    $aulas[] = "15:55 - 16:45";
    $aulas[] = "Intervalo (16:45 - 18:10)";
    $aulas[] = "18:10 - 19:00";
    $aulas[] = "19:00 - 19:50";
    $aulas[] = "19:50 - 20:40";
    $aulas[] = "Intervalo (20:40 - 21:00)";
    $aulas[] = "21:00 - 21:50";
    $aulas[] = "21:50 - 22:40";

    $dados["0x2"] = ["IIW2020 Administração de Sistemas Operacionais e Redes - 1236", 4];
    $dados["0x4"] = ["IIW2020 Administração de Sistemas Operacionais e Redes - 1236", 2];
    $dados["4x3"] = ["IIW2020 Projeto Integrador II - 1239", 2];
    $dados["4x4"] = ["IN2018 Projeto Final de Curso - 181", 2];
    $dados["7x2"] = ["TPS2021-1 Lógica de Programação - 1483", 2];
    $dados["10x2"] = ["TPS2021-1 Lógica de Programação - 1483", 2];
    $dados["10x3"] = ["TPS2021-1 Lógica de Programação - 1483", 2];
    $dados["13x0"] = ["TADS2020/2021 Sistemas Operacionais - 8", 1];

    $rowspan = [];
    foreach ($aulas as $linha => $aula) {
        $rowspan[$linha] = 0;
    }

    foreach ($aulas as $linha => $aula) {
        echo "<tr>";
        echo "  <td>$aula</td>";
        for ($coluna=0; $coluna < 6 - $rowspan[$linha]; $coluna++) {             
            $key = $linha."x".$coluna;
            if (isset($dados[$key])) {
                $atividade = $dados[$key];
                $atv = $atividade[0];
                $tempo = $atividade[1];
                echo "<td rowspan='$tempo'>$atv</td>";                
                if($tempo > 1){                                        
                    for ($i=1; $i < $tempo; $i++) {
                        $rowspan[$linha + $i] += 1;
                    }                     
                }                 
            } else {
                echo "<td>---</td>";
            }
        }
        echo "  <td>$aula</td>";        
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

