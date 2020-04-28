<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>cadastro</title>
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"/>
</head>
<body>
    <h1 class="jumbotron">cadastro</h1>
    <form name="cadastroPessoa" method="post" action="controle/controle.php">

        <div class="form-group">
            <input type="text" name="nome"
            placeholder="Digite o nome" autofocus
            class="form-control required pattern=^[a-z]{2,30}$">
        </div>

        <div class="form-group">
            <input type="text" name="sobrenome"
            placeholder="Digite o seu sobrenome" class="form-control">
        </div>

        <div class="form-group">
            <input type="number" name="dataNascimento"
            placeholder="Digite o seu ano de nascimento" class="form-control">
        </div>

        <div class="form-group">
            <input type="float" name="peso"
            placeholder="Digite o seu peso" class="form-control">
        </div>

        <div class="form-group">
            <label>Escolha o seu sexo!</label>
        </div>

        <div class="form-group">
            <select name="sexo"
             class="form-control" pattern="^(Masculino|Feminino)$">
             <option value="Masculino">Masculino</option>
             <option value="Feminino">Feminino</option>
            </select>
        </div>

        <div class="form-group">
            <input type="submit" value="Cadastrar"
            class="btn btn-primary">
            <input type="reset" value="Limpar"
            class="btn btn-danger">
        </div>
    </form>

    <a href="index.php" class="btn btn-warning">Voltar para home</a>
</body>
</html>
