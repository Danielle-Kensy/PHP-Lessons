<?php
class Validacao
{

    public static function validarNome($valor): bool
    {
        $expressao = "/^[a-zA-Z]{2,30}$/";
        return 	preg_match($expressao, $valor);
    }

    public static function validarSobrenome($valor): bool
    {
        $expressao = "/^[a-zA-Z]{2,100}$/";
        return preg_match($expressao, $valor);
    }

    public static function validarDataNascimento($valor): bool
    {
        $expressao = "/^[0-9]{4}$/";
        return preg_match($expressao, $valor);
    }

    public static function validarSexo($valor): bool
    {
        $expressao = "/^(Masculino|Feminino)$/";
        return preg_match($expressao, $valor);
    }

}//classe
