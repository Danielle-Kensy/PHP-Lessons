<?php
include "../modelo/pessoa.class.php";
$pessoa = new Pessoa();
$pessoa->setNome($_POST['nome']);
$pessoa->setPeso($_POST['peso']);
echo "<p>Nome: " . $pessoa->getNome()
    ."<br>Peso: " . $pessoa->getPeso()
    ."<br>Raiz Peso: " . $pessoa->calcularRaizQuadradaDoPesoDaPessoa()
    ."<br>Pot. peso: " . $pessoa->calcularPotenciaAoQuadradoDoPesoDaPessoa()
    ."</p>";
