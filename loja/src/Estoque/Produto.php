<?php

namespace App\Estoque;

class Produto
{
    private $quantidade;

    function __construct($quantidade)
    {
        $this->quantidade = $quantidade;
    }
    
}
