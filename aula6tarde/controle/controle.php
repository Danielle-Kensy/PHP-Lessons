<?php
include "../modelo/pessoa.class.php";
include "../util/validacao.class.php";

$contador = 0;

if(!Validacao::validarNome($_POST['nome'])) {
    $contador++;
}

if(!Validacao::validarSobrenome($_POST['sobrenome'])) {
    $contador++;
}

if(!Validacao::validarDataNascimento($_POST['dataNascimento'])) {
    $contador++;
}

if(!Validacao::validarSexo($_POST['sexo'])) {
    $contador++;
}

if($contador == 0) {
$pessoa = new Pessoa;
$pessoa->nome = $_POST['nome'];
$pessoa->sobrenome = $_POST['sobrenome'];
$pessoa->dataNascimento = $_POST['dataNascimento'];
$pessoa->peso = $_POST['peso'];
$pessoa->sexo = $_POST['sexo'];

echo $pessoa;
$pessoa->__destruct();

header("location:../resposta.php?nome=$pessoa->nome&sobrenome=$pessoa->sobrenome&dataNascimento=$pessoa->dataNascimento&calcularIdade={$pessoa->calcularIdade()}&peso=$pessoa->peso&verificarPeso={$pessoa->verificarPeso()}&sexo=$pessoa->sexo");

} else {
 header("location:../erro.php?erro=Erro dado(s) inválido(s)");
}
