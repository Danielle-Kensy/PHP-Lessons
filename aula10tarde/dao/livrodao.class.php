<?php
require "conexaobanco.class.php";
class LivroDAO
{ //DAO - Data Access Object - Acesso aos dados do objeto

    private $conexao = null;

    public function __construct()
    {
        $this->conexao = ConexaoBanco::getInstance();
    }

    public function __destruct()
    {
    }

    public function cadastrar($livro)
    {
        try { //PDO - sql injection

            $statement = $this->conexao->prepare("insert into livro(idlivro,titulo,editora,autor,anolancamento,genero)values(null,?,?,?,?,?)");

            $statement->bindValue(1, $livro->titulo);
            $statement->bindValue(2, $livro->editora);
            $statement->bindValue(3, $livro->autor);
            $statement->bindValue(4, $livro->anoLancamento);
            $statement->bindValue(5, $livro->genero);

            $statement->execute();

        } catch(PDOException $error) {
            echo "Erro ao cadastrar!".$error;
        }
    }

    public function buscarLivros()
    {
        try {
            $statement = $this->conexao->query("select * from livro");
            $array = $statement->fetchAll(PDO::FETCH_CLASS, "Livro");
            return $array;
        } catch(PDOException $error) {
            echo "Erro ao buscar!".$error;
        }
    }

    public function deletarLivro($idLivro)
    {
        try {
            $statement = $this->conexao->prepare("delete from livro where idlivro = ?");

            $statement->bindValue(1, $idLivro);

            $statement->execute();

        } catch(PDOException $error) {
            echo "Erro ao excluir livro!".$error;
        }
    }

    public function filtrarLivro($filtro, $pesquisa)
    {
        try{

            $query = "";
            if($filtro == "Código"){
                $query = "where idlivro =".$pesquisa;
            } else{
                $query = "";
            }

            $statement = $this->conexao->query("select * from livro {$query}");
            $array = $statement->fetchAll(PDO::FETCH_CLASS, "Livro");
            return $array;

        }catch(PDOException $error) {
            echo "Erro ao filtrar livro!".$error;
        }
    }

    public function alterarLivro($livro)
    {
        try{
            $statement = $this->conexao->prepare("update livro set titulo = ?, editora = ?, autor = ?, anoLancamento = ?, genero = ? where idlivro = ?");

            $statement->bindValue(1, $livro->titulo);
            $statement->bindValue(2, $livro->editora);
            $statement->bindValue(3, $livro->autor);
            $statement->bindValue(4, $livro->anoLancamento);
            $statement->bindValue(5, $livro->genero);
            $statement->bindValue(6, $livro->idLivro);

            $statement->execute();

        } catch(PDOException $error) {
            echo "Erro ao alterar!".$error;
        }
    }
}
