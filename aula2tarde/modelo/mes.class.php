<?php
class Mes
{//PSR-1

    private $mes;

    public function getMes(): int
    {
        return $this->mes;
    }

    public function setMes($mes): void
    {
        $this->mes = $mes;
    }

    public function verificarMes(): string
    {
        switch($this->mes){
            case "1" : return "janeiro";
            case "2" : return "fevereiro";
            case "3" : return "março";
            case "4" : return "abril";
            case "5" : return "maio";
            case "6" : return "junho";
            case "7" : return "julho";
            case "8" : return "agosto";
            case "9" : return "setembro";
            case "10" : return "outubro";
            case "11" : return "novembro";
            case "12" : return "dezembro";
            default : return "Mês inválido!";
        }
    }

    public function verificarMesIf(): string
    {
        if($this->mes ==1){
            return "janeiro";
        } else if($this->mes ==2){
            return "fevereiro";
        }else if($this->mes ==3){
            return "março";
        }else if($this->mes ==4){
            return "abril";
        }else if($this->mes ==5){
            return "maio";
        }else if($this->mes ==6){
            return "junho";
        }else if($this->mes ==7){
            return "julho";
        }else if($this->mes ==8){
            return "agosto";
        }else if($this->mes ==9){
            return "setembro";
        }else if($this->mes ==10){
            return "outubro";
        }else if($this->mes ==11){
            return "novembro";
        }else if($this->mes ==12){
            return "dezembro";
        }
        return "Mês inválido";
    }

}//classe
 ?>
