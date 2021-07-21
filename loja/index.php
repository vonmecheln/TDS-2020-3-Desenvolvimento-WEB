<?php

require_once 'vendor/autoload.php';

use \App\Venda\Usuario;
use \App\Venda\Produto;
use \App\Venda\Compra;
use \App\Estoque\Produto as EstProduto;

$usuario = new Usuario("Luís", "luis.vonmecheln@ifpr.edu.br");
$produto = new Produto("KDB-59", "Teclado de mesa");

$compra = new Compra($usuario);
$compra->addProduto($produto);


$produtoEstoque = new EstProduto(10);

echo("<pre>");
var_dump($usuario);
var_dump($produto);
var_dump($compra);