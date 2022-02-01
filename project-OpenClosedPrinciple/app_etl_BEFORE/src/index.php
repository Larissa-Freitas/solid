<?php

require __DIR__."/vendor/autoload.php";

use src\Leitor;

//-------------LEITOR CSV---------
$leitorCSV = new Leitor();
$leitorCSV->setDiretorio(__DIR__.'/arquivos');
$leitorCSV->setArquivo('dados.csv');

print_r($leitorCSV->lerArquivo());

//-------------LEITOR TXT ---------
$leitorTXT = new Leitor();
$leitorTXT->setDiretorio(__DIR__.'/arquivos');
$leitorTXT->setArquivo('dados.txt');

print_r($leitorTXT->lerArquivo());
