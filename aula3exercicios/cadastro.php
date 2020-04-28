<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cálculos do Quadrado</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <h1>Cálculos do Quadrado</h1>

        <form name="cadastroQuadrado" method="POST" action="controle/controle.php">
            <div>
                <input type="text" placeholder= "Digite o tamanho do lado " name="lado" autofocus>
            </div>

            <div>
                <input type="submit" value="Calcular">
            </div>
        </form>
        <ul>
            <li> <a href="index.php">Voltar para home</a></li>
    </body>
</html>
