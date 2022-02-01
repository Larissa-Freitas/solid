<?php

require __DIR__."/vendor/autoload.php";


use src\Retangulo;
use src\Quadrado;

$retangulo = new Retangulo();
$retangulo->setAltura(5);
$retangulo->setLargura(10);
echo '<h4>Área do Retângulo:'.$retangulo->getArea().'<h4>';

echo'<br>';

$quadrado = new Quadrado();
$quadrado->setAltura(5);
echo '<h4>Área do Quadrado:'.$quadrado->getArea().'<h4>';

echo'<br>'; 

$retangulo = new Quadrado();
$retangulo->setAltura(5);
$retangulo->setLargura(10);
echo '<h4>Área do segundo Retângulo:'.$retangulo->getArea().'<h4>';

