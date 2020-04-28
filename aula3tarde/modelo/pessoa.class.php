<?php
class Pessoa
{

    private $nome;
    private $peso;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    public function getPeso(): float
    {
        return $this->peso;
    }

    public function setPeso($peso): void
    {
        $this->peso = $peso;
    }

    public function calcularRaizQuadradaDoPesoDaPessoa(): float
    {
        return sqrt($this->peso);
    }

    public function calcularPotenciaAoQuadradoDoPesoDaPessoa(): float
    {
        return pow($this->peso, 2);
    }
}//classe
