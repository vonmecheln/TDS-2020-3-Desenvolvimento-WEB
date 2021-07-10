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
    
    $json = '{"0":{"2":{"aula":"IIW2020 Administração de Sistemas Operacionais e Redes - 1236","tempo":"5"},"4":{"aula":"IIW2020 Administração de Sistemas Operacionais e Redes - 1236","tempo":"2"}},"4":{"3":{"aula":"IIW2020 Projeto Integrador II - 1239","tempo":"2"},"4":{"aula":"IN2018 Projeto Final de Curso - 181","tempo":"2"}},"7":{"2":{"aula":"TPS2021-1 Lógica de Programação - 1483","tempo":"2"}},"10":{"2":{"aula":"TPS2021-1 Lógica de Programação - 1483","tempo":"2"},"3":{"aula":"TPS2021-1 Lógica de Programação - 1483","tempo":"2"}},"13":{"0":{"aula":"TADS2020/2021 Sistemas Operacionais - 8","tempo":"1"}}}';
    $dados = json_decode($json, true);
    
    
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

    // echo "<pre>";
    // print_r($dados);
    // die();

    $rowspan = [];
    foreach ($aulas as $key ) {
        $rowspan[] = 0;
    }
    
    foreach ($aulas as $linha => $aula) {
        echo "<tr>";
        echo "  <td>$aula</td>";

        for ($coluna=0; $coluna < 6 - $rowspan[$linha]; $coluna++) { 
            
            if (isset($dados[$linha][$coluna])) {
            
                $atividade = $dados[$linha][$coluna];
                $atv = $atividade["aula"];
                $tempo = $atividade["tempo"];
                echo "<td rowspan='$tempo'>$atv</td>";
                if ($tempo > 1) {                    
                    for ($i=1; $i < $tempo; $i++) { 
                        $rowspan[$linha+$i] += 1; 
                    }
                }
            } else {
                echo "<td>---</td>";
            }
        }
        echo "  <td>$aula</td>";
        
        echo "</tr>";
    }

    die();
    


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

    
    

?>

    <tr>
        <td></td>
        <td colspan="6">Versão 4-2021. Válido a partir de 07/06/2021</td>
        <td></td>
    </tr>

</table>

</body>
</html>

