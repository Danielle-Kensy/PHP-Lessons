<?php
class Quadrado
{

    private $lado;

    public function getLado(): float
    {
        return $this->lado;
    }

    public function setLado($lado): void
    {
        $this->lado = $lado;
    }

    public function calcularPerimetro(): float
    {
        return $this->lado*4;
    }

    public function calcularArea(): float
    {
        return $this->lado*$this->lado;
    }
}
