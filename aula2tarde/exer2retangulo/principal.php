<?php
include "retangulo.class.php";

$retangulo = new Retangulo();
$retangulo->setAltura($_POST['altura']);
$retangulo->setBase($_POST['base']);
echo "<p><br>A base é: " . $retangulo->getBase();
echo "<br>A altura é: " . $retangulo->getAltura();
echo "<br>A área do seu retângulo é: " . $retangulo->calcularArea();
echo "<br>O perímetro do seu retângulo é: " . $retangulo->calcularPerimitro();
