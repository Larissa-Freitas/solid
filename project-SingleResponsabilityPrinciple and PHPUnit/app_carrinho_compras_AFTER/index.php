<?php

require __DIR__."/vendor/autoload.php";


use src\CarrinhoCompra;
use src\Item;
use src\Pedido;
use src\EmailService;

$pedido = new Pedido();
$item1 = new Item();
$item2 = new Item();

$item1->setDescricao('Porta Copo');
$item->setValor('4.55');

$item2->setDescricao('Lâmpada');
$item2->setValor('8.32');

print_r($pedido);

$pedido->getCarrinhoCompra()->adicionarItem($item1);
$pedido->getCarrinhoCompra()->adicionarItem($item2);

print_r($pedido);

print_r($pedido->getCarrinhoCompra()->getItens());
$total = 0;
foreach($pedido->getCarrinhoCompra()->getItens() as $key => $item){
    $total += $item->getValor();
}

//OUTROS TESTES