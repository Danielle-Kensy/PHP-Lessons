<?php
class Pessoa
{
    private $nome;
    private $sobrenome;
    private $dataNascimento;
    private $peso;
    private $sexo;

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

    public function calcularIdade(): int
    {
        return 2019 - $this->dataNascimento;
    }

    public function verificarPeso(): string
    {
        if($this->peso < 80){
            return "Peso normal";
        }
            return "Acima do Peso";

    }

    public function __toString()
    {
        return "<br>Nome: ".$this->nome." ".$this->sobrenome
      ."<br>Sexo: ".$this->sexo
      ."<br>Idade: ".$this->dataNascimento
      ."<br>Peso: ".$this->peso;
    }
}//fecha classe
