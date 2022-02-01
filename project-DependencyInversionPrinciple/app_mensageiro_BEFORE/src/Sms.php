<?php

namespace src;


class Sms implements IMensagemToken{
    public function enviar():void{
        echo 'E-mail: seu token é 111-222';
    }
}