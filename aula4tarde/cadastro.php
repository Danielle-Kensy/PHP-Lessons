<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Cadastro - Celular </title>
        <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    </head>
    <body>
        <h1 class="jumbotron">Cadastro - Celular</h1>
        <form name="cadastroCelular" method="POST" action="controle/controle.php">

            <div class="form-group">
                <input type="text" name="modelo" placeholder="Digite o modelo" autofocus
                class="form-control" required pattern="^[^!@#$%¨*()+_\^{}\[\];:?\\]{2,30}$">
            </div>

            <div class="form-group">
                <input type="text" name="marca" placeholder="Digite a marca"
                class="form-control" required pattern="^[^!@#$%¨*()_\^{}\[\];:?\\]{2,30}$">
            </div>

            <div class="form-group">
                <input type="text" name="preco" placeholder="Digite o preco"
                class="form-control" required pattern="^[1-9\,]+$">
            </div>

            <div class="form-group">
                <input type="submit" value="Cadastrar" class="btn btn-primary">
                <input type="reset" value="Limpar" class="btn btn-danger">
            </div>
        </form>
        <a href="index.php" class="btn btn-warning">Voltar para home</a>
    </body>
</html>
