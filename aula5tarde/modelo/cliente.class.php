<?php
class Cliente
{
    private $cpf;
    private $email;

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
        return "Seu CPF: ".$this->cpf.
               "<br>Seu e-mail: ".$this->email;
    }
}
