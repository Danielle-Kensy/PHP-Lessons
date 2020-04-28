<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Cadastro</title>
        <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    </head>
    <body>
        <h1 class="jumbotron">Cadastro</h1>
            <div class="jumbotron">
                <?php
                echo "<br>Modelo: ".$_GET['modelo'];
                echo "<br>Marca: ".$_GET['marca'];
                echo "<br>Preço: ".$_GET['preco'];
                echo "<br>Preço com 10% de desconto: ".$_GET['precoComDesconto'];
                ?>
            </div>
        </form>
    </body>
</html>
