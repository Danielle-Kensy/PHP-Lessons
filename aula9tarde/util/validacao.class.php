<?php
class Validacao
{

    public static function validarNome($valor): bool
    {
        $expressao = "/^[a-zA-z ]{2,50}$/";
        return preg_match($expressao, $valor);
    }
}
