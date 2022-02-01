<?php

namespace src;

class Item {
    private $descricao;
    private $valor;

    public function __construct(){
        $this->descricao = '';
        $this->valor = 0;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function getValor(){
        return $this->valor;
    }

    public function setDescricao(String $descricao){
        $this->descricao = $descricao;
    }

    public function setValor(Float $valor){
        $this->valor = $valor;
    }

    public function itemValido(){
        if($this->descricao == ''){
            return false;
        }
        if($this->valor <= 0){
            return false;
        }

        return true;
    }

    public function confirmar(){
        if($this->carrinhoCompra->validarCarrinho()){
            $this->setStatus('confirmado');
            return true;
        }
        return false;
    }


}