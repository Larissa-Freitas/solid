<?php

require __DIR__."/vendor/autoload.php";

use src\Poligono;
use src\poligonos\Retangulo;
use src\poligonos\Quadrado;

$poligono = new Poligono;
$poligono->setForma(new Retangulo);
$poligono->getForma()->setAltura(5);
$poligono->getForma()->setLargura(10);
echo 'Área do Retângulo: '.$poligono->getForma()->getArea();

echo '<br>';

$poligono = new Poligono;
$poligono->setForma(new Quadrado);
$poligono->getForma()->setAltura(5);
echo 'Área do Quadrado: '.$poligono->getForma()->getArea();
