<?php
include '../modelo/cliente.class.php';
$cliente = new Cliente;
$cliente->cpf = $_POST['cpf'];
$cliente->email = $_POST['email'];

echo $cliente;
$cliente->__destruct();

header("location:../resposta.php?cpf=$cliente->cpf&email=$cliente->email");
