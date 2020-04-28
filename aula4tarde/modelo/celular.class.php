<?php
class Celular
{

    private $modelo;
    private $marca;
    private $preco;

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

    public function __set($atributo,$valor)
    {
        $this->$atributo = $valor;
    }

    public function precoComDesconto(): float
    {
        return $this->preco * 0.90;
    }

    public function __toString()
    {
        return "<br>Nome: " . $this->nome . "<br>Marca: " . $this->marca
        . "<br>Preço: " . $this->preco;
    }

}//classe
