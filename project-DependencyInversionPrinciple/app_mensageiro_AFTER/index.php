<?php

require __DIR__.'/vendor/autoload.php';

use src\Mensageiro;
use src\Email;
use src\Sms;


//-------CANAL E-MAIL --------
$msg = new Mensageiro(new Email());
$msg->enviarToken();

echo '<br>';


//-------CANAL SMS --------
$msg2 = new Mensageiro(new Sms());
$msg2->enviarToken();
