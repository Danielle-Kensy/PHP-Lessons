<?php
session_start();
include "../modelo/pessoa.class.php";
include "../util/padronizacao.class.php";
include "../util/validacao.class.php";

$erros = [];
if(!Validacao::validarNome($_POST['nome'])) {
    $erros[] = "Nome inválido!";
}

if(!Validacao::validarNome($_POST['sobrenome'])) {
    $erros[] = "Sobrenome inválido!";
}

if(count($erros) == 0) {
    $pessoa = new Pessoa;
    $pessoa->nome = Padronizacao::padronizarNome(Padronizacao::juntarNome($_POST['nome'],$_POST['sobrenome']));
    $pessoa->data = Padronizacao::juntarData($_POST['dia'],$_POST['mes'],$_POST['ano']); 
    echo $pessoa;
    header("location:../resposta.php");
    $_SESSION['mensagem'] = "Cadastro efetuado com sucesso!";
    $_SESSION['pessoa'] = serialize($pessoa);
} else {
    // teste
    // foreach($erros as $erro) {
    //     echo "<br>".$erro;
    // }
    $_SESSION['post'] = serialize($_POST);
    $_SESSION['erros'] = serialize($erros);
    header("location:../cadastro.php");
}
