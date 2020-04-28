<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Home - Exemplo composer</title>
        <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"/>
    </head>
    <body>
        <h1 class="jumbotron bg-danger">Resposta</h1>

        <div class="jumbotron">
            <?php
                echo "Nome: ".$_GET['nome'];
                echo "<br>Sobrenome: ".$_GET['sobrenome'];
                echo "<br>Data nascimento: ".$_GET['dataNascimento'];
                echo "<br>Idade: ".$_GET['calcularIdade'];
                echo "<br>Peso: ".$_GET['peso'];
                echo "<br>Verificação do Peso: ".$_GET['verificarPeso'];
                echo "<br>Sexo: ".$_GET['sexo'];
            ?>
        </div>
    </body>
</html>
