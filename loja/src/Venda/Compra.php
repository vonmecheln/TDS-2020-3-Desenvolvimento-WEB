<?php

namespace App\Venda;

class Compra
{
    private $usuario;
    private $produtos;

    function __construct($usuario)
    {
        $this->usuario = $usuario;
        $this->produtos = [];
    }

    function addProduto($produto){
        $this->produtos[] = $produto;
    }
    
}
