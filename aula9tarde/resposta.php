<?php
session_start();
if(!isset($_SESSION['mensagem'])) header("location:cadastro.php")
 ?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Resposta</title>
    </head>
    <body>
        <h1>Resposta</h1>
        <?php
        include "modelo/pessoa.class.php";
        echo $_SESSION['mensagem'];
        $pessoa = unserialize($_SESSION['pessoa']);
        echo "<br>".$pessoa;
        unset($_SESSION['pessoa']);
        unset($_SESSION['mensagem']);
        ?>
    </body>
</html>
