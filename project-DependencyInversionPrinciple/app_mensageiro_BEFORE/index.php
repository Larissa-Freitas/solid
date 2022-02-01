<?php

require __DIR__.'/vendor/autoload.php';

use src\Mensageiro;

//-------CANAL E-MAIL --------
$msg = new Mensageiro;
$msg->setCanal('email');
$msg->enviarToken();

echo '<br>';


//-------CANAL SMS --------
$msg2 = new Mensageiro;
$msg2->setCanal('sms'); 
$msg2->enviarToken();