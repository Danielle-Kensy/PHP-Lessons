<?php
class Distancia
{
    private $valor1;
    private $valor2;
    private $valor3;
    private $valor4;

    public function Valor()
    {
    }

    public function getValor1(): float
    {
        return $this->valor1;
    }

    public function setValor1($valor1): void
    {
        $this->valor1 = $valor1;
    }

    public function getValor2(): float
    {
        return $this->valor2;
    }

    public function setValor2($valor2): void
    {
        $this->valor2 = $valor2;
    }

    public function getValor3(): float
    {
        return $this->valor3;
    }

    public function setValor3($valor3): void
    {
        $this->valor3 = $valor3;
    }

    public function getValor4(): float
    {
        return $this->valor4;
    }

    public function setValor4($valor4): void
    {
        $this->valor4 = $valor4;
    }

    public function calcularDistanciaDeDoisParesOrdenados(): float
    {
        return sqrt(pow(($this->valor1 - $this->valor2), 2) + pow(($this->valor3 - $this->valor4), 2));
    }
}//classe
