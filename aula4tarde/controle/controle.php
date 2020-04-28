<?php
include "../modelo/celular.class.php";
$celular = new Celular;
$celular->modelo = $_POST['modelo'];
$celular->marca = $_POST['marca'];
$celular->preco = $_POST['preco'];
echo $celular;
$celular->__destruct();

header("location:../resposta.php?modelo=$celular->modelo&marca=$celular->marca&preco=$celular->preco&precoComDesconto={$celular->precoComDesconto()}");
