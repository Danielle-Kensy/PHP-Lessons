<?php
class Livro
{

  private $idLivro; //auto_increment
  private $titulo;
  private $editora;
  private $autor;
  private $anoLancamento;
  private $genero;

  public function __construct()
  {
  }

  public function __destruct()
  {
  }

  public function __get($atributo)
  {
    return $this->$atributo;
  }

  public function __set($atributo, $valor)
  {
    $this->$atributo = $valor;
  }

  public function __toString()
  {
    return nl2br("Código: $this->idLivro
                  Titulo: $this->titulo
                  Editora: $this->editora
                  Autor: $this->autor
                  Ano de lançamento: $this->anoLancamento
                  Gênero: $this->genero");
  }
}
