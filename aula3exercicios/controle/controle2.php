<?php
include "../modelo/distancia.class.php";

$distancia = new Distancia();
$distancia->setValor1(1);
$distancia->setValor2(3);
$distancia->setValor3(3);
$distancia->setValor4(4);
echo "<pt>"
    . "O x1 é: " . $distancia->getValor1()
    . "<br>O y1 é: " . $distancia->getValor2()
    . "<br>O x2 é: " . $distancia->getValor3()
    . "<br>O y2 é: " . $distancia->getValor4()
    . "<br>A distância entre os pontos é:  " . $distancia->calcularDistanciaDeDoisParesOrdenados() . "</pt>";
