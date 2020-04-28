<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Consulta de livros</title>
        <!--BOOTSTRAP VIA NPM -->
        <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <src="node_modules/bootstrap/dist/js/bootstrap.min.js"/>
    </head>
    <body>
        <h1 class="jumbotron bg-secondary">Consulta de livros</h1>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
       <a class="navbar-brand" href="#">Sistema</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav">
           <li class="nav-item">
             <a class="nav-link" href="index.php">Home</a>
           </li>

           <li class="nav-item">
             <a class="nav-link" href="cadastro-livro.php">Cad. Livros <span class="sr-only"></span></a>
           </li>

           <li class="nav-item active">
             <a class="nav-link" href="buscar-livro.php">Cons. Livros <span class="sr-only">(current)</span></a>
           </li>
         </ul>
       </div>
      </nav>

      <?php
      include "modelo/livro.class.php";
      include "dao/livrodao.class.php";

      $livroDAO = new LivroDAO;
      $livros = $livroDAO->buscarLivros();

      if(count($livros) == 0) {
      echo "<h1>Não há livros cadastrados!</h1>";
      echo "</body>";
      echo "</html>";
      die();
      }

      ?>

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover table-condensed">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Título</th>
                        <th>Editora</th>
                        <th>Autor</th>
                        <th>Ano de lançamento</th>
                        <th>Gênero</th>
                        <th>Alterar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>

                <tfoot>
                    <tr>
                        <th>Código</th>
                        <th>Título</th>
                        <th>Editora</th>
                        <th>Autor</th>
                        <th>Ano de lançamento</th>
                        <th>Gênero</th>
                        <th>Alterar</th>
                        <th>Excluir</th>
                    </tr>

                </tfoot>

                <tbody>
                    <?php
                    // var_dump($livros);
                    foreach($livros as $livro) {
                        echo "<tr>";
                            echo "<td>$livro->idLivro</td>";
                            echo "<td>$livro->titulo</td>";
                            echo "<td>$livro->editora</td>";
                            echo "<td>$livro->autor</td>";
                            echo "<td>$livro->anoLancamento</td>";
                            echo "<td>$livro->genero</td>";
                            echo "<td><a href='alterar-livro.php?id=$livro->idLivro' class='btn btn-warning'>Alterar</td>";
                            echo "<td><a href='buscar-livro.php?id=$livro->idLivro' class='btn btn-danger'>Excluir</td>";
                            echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div> <!-- table responsive -->
        <?php
        if(isset($_GET['id'])) {
            $livroDAO = new LivroDAO;
            $livroDAO->deletarLivro($_GET['id']);

            header("location:buscar-livro.php");
        }
        ?>
    </body>
</html>
