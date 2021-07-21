<?php

namespace App\Venda;

class Produto
{
    private $nome;
    private $descricao;

    function __construct($nome, $descricao)
    {
        $this->nome = $nome;
        $this->descricao = $descricao;
    }
    
}
