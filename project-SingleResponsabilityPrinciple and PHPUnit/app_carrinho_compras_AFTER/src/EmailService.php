<?php

namespace src;

class EmailService {
    private $de;
    private $para;
    private $assunto;
    private $conteudo;

    public function __construct(
        String $de = 'contato@site.com.br',
        String $para = '',
        String $assunto = '',
        String $conteudo = ''
    ){
        $this->de = $de;
        $this->para = $para;
        $this->assunto = $assunto;
        $this->conteudo = $conteudo;
    }

    public function dispararEmail(){
        return '--- Envia Email ---';
    }
}
