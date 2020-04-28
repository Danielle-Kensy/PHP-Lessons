<?php
class Retangulo
{

    private $base;
    private $altura;

    public function getBase(): int
    {
        return $this->base;
    }

    public function setBase($base): void
    {
        $this->base = $base;
    }

    public function getAltura(): int
    {
        return $this->altura;
    }

    public function setAltura($altura): void
    {
        $this->altura = $altura;
    }

    public function calcularArea(): int
    {
        $resposta;
        $resposta = $this->getBase()*$this->getAltura();
        return $resposta;
    }

    public function calcularPerimitro(): int
    {
        $resposta;
        $resposta = 2*($this->getBase()+$this->getAltura());
        return $resposta;
    }

}//fecha classe
