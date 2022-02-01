<?php

namespace src;
use src\Item;

class CarrinhoCompra {
    
    //attributes
    private $itens;
    

    //methods
    public function __construct() {
        $this->itens = [];
        
    }

    public function getItens() {
        return $this->itens;
    }

    public function adicionarItem(Item $item) {
        array_push($this->itens,$item);
        return true;
    }

    public function validarCarrinho() {
        return count($this->itens) > 0;
    }
    
    

}