<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>erro</title>
        <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></>
    </head>
    <body>
        <h1 class="jumbotron bg-danger">ERRO</h1>

        <div class="jumbotron">
        <?php
        echo "<br>".$_GET['erro'];
        ?>
        </div>
    </body>
</html>
