<?php

namespace src\dao;

use src\BD;
use src\componentes\Log;
use src\componentes\Notificacao;
use src\interfaces\ICadastro;

class UsuarioModel extends BD implements ICadastro{

    public function salvar(){
        //logic
    }
    public function registrarLog(Log $log){
        //logic
    }
    public function enviarNotificacao(Notificacao $notificacao){
        //logic
    }
}