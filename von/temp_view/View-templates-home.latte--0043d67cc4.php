<?php

use Latte\Runtime as LR;

/** source: src/View/templates/home.latte */
final class Template0043d67cc4 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .tooltip {
            position: relative;
            display: inline-block;
            border-bottom: 1px dotted black;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 120px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;

            /* Position the tooltip */
            position: absolute;
            z-index: 1;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
        }
    </style>

</head>

<body>

';
		$iterations = 0;
		foreach ($perguntas as $pergunta) /* line 40 */ {
			echo '
        <p>';
			echo LR\Filters::escapeHtmlText($pergunta['user']['name']) /* line 42 */;
			echo ':
            <b>';
			echo LR\Filters::escapeHtmlText($pergunta['pergunta']) /* line 43 */;
			echo '</b>
        </p>

';
			$iterations = 0;
			foreach ($pergunta["respostas"] as $resposta) /* line 46 */ {
				echo '            <p>';
				echo LR\Filters::escapeHtmlText($resposta['user']['name']) /* line 47 */;
				echo '
                <i>';
				echo LR\Filters::escapeHtmlText($resposta['resposta']) /* line 48 */;
				echo '</i> 
                <b><span class=\'tooltiptext\'></span></b></p>
';
				$iterations++;
			}
			$iterations++;
		}
		echo '</body>

</html>';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['resposta' => '46', 'pergunta' => '40'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		
	}

}
