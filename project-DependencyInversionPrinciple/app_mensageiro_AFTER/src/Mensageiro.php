<?php

namespace src;

use src\IMensagemToken;

class Mensageiro {

    private $canal;

    public function __contruct(IMensagemToken $canal){
        $this->setCanal($canal);
        
    }

    public function setCanal(IMensagemToken $canal): void{
        $this->canal = $canal;
    }

    public function getCanal(): IMensagemToken{
        return $this->canal;
    }

    public function enviarToken(): IMensagemToken{
         $this->getCanal()->enviar();
    }
}