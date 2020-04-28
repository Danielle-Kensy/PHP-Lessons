<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Cadastro de pessoa</title>
    </head>
    <body>
        <h1>Cadastro de Pessoa</h1>
        <?php
        if(isset($_SESSION['erros'])){
            $erros = unserialize($_SESSION['erros']);
            foreach ($erros as $erro) {
                echo "<br>".$erro;
            }
            $post = unserialize($_SESSION['post']);
            //var_dump($post);
            //unset($_SESSION['erros']);
        }
         ?>
        <form name="cadastro" method="post" action="controle/controle.php">
            <div>
                <input type="text" name="nome" placeholder="Digite o seu nome"
                autofocus value="<?php echo $post['nome'] ??""; ?>">
            </div>
            <div>
                <input type="text" name="sobrenome" placeholder="Digite o seu sobrenome"
                value="<?php echo $post['sobrenome'] ??""; ?>">
            </div>
            <div>
                <input type="text" name="dia" placeholder="Digite o dia"
                value="<?php echo $post['dia'] ??""; ?>">
            </div>
            <div>
                <input type="text" name="mes" placeholder="Digite o mes"
                value="<?php echo $post['mes'] ??""; ?>">
            </div>
            <div>
                <input type="text" name="ano" placeholder="Digite o ano"
                value="<?php echo $post['ano'] ??""; ?>">
            </div>
            <div>
                <input type="submit" value="Cadastrar">
            </div>
        </form>
    </body>
</html>
