<?php

namespace src;

class Pedido {
    private $status;
    private $carrinhoCompra;
    private $valorPedido;

    public function __construct(){
        $this->status = 'aberto';
        $this->carrinhoCompra = new CarrinhoCompra();
        $this->valorPedido = 0;
    }

    public function getCarrinhoCompra(){
        return $this->carrinhoCompra;   
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus( String $status){
        $this->status = $status;
    }
}