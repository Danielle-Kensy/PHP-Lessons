<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Resposta</title>
    </head>
    <body>
        <h1>Seus dados</h1>
        <div>
            <?php
            echo "<p>CPF: ".$_GET['cpf']
                ."<br>E-mail: ".$_GET['email']."</p>";
            ?>
        </div>
    </body>
</html>
