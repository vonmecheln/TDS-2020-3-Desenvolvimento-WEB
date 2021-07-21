<?php

namespace App\Venda;

class Usuario
{
    private $nome;
    private $email;

    function __construct($nome, $email)
    {
        $this->nome = $nome;
        $this->email = $email;
    }

    
}
