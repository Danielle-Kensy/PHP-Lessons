<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Pessoa</title>
    </head>
    <body>
        <h1>Cadastro de Pessoa</h1>

        <form name="cadastroPessoa" method="POST" action="controle/controle.php">
            <div>
                <input type="text" placeholder="Digite seu nome" name="nome" autofocus>
            </div>

            <div>
                <input type="text" placeholder="Digite seu peso" name="peso">
            </div>

            <div>
                <input type="submit" value="Cadastrar">
            </div>
        </form>
        <ul>
            <li> <a href="index.php">Voltar para a home</a></li>
        </ul>
    </body>
</html>
