<?php
include '../modelo/livro.class.php';
include '../dao/livrodao.class.php';

$livro = new Livro;

//auto_increment
//$livro->idLivro = 1;

$livro->titulo = $_POST['titulo'];
$livro->editora = $_POST['editora'];
$livro->autor = $_POST['autor'];
$livro->anoLancamento = $_POST['anoLancamento'];
$livro->genero = $_POST['genero'];

$livroDAO = new LivroDAO;
$livroDAO->cadastrar($livro);

echo $livro;

header("location:../buscar-livro.php");
