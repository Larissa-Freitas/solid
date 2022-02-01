<?php

namespace src;
use src\IMensagemToken;

class Email implements IMensagemToken{
    public function enviar():void{
        echo 'E-mail: seu token é 555-333';
    }
}