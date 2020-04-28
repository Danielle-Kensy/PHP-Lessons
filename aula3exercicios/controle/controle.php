<?php
include "../modelo/quadrado.class.php";

$quadrado = new Quadrado();
$quadrado->setLado($_POST['lado']);
echo "<pt>"
    . "Lado do Quadrado: " . $quadrado->getLado()
    . "<br>Perímetro: " . $quadrado->calcularPerimetro()
    . "<br>Área: " . $quadrado->calcularArea() . "</pt>";
