<?php
class Data{
    public int $dia;
    public int $mes;
    public int $ano;

    public function __construct(int $dia, int $mes, int $ano){
        $this->setDay($dia);
        $this->setmonth($mes);
        $this->setYear($ano);
    }
   
    function setDay($dia){
         $this->dia = $dia;
    }
    function setMonth($mes){
         $this->mes = $mes;
    }
    function setYear($ano){
         $this->ano = $ano;
    }
   
    function getDay(){
        return $this->dia;
    }
    function getMonth(){
        return $this->mes;
    }
    function getYear(){
        return $this->ano;
    }
   
    public function string(){
        return getDia() + "/" + getMes() + "/" + getAno();
    }
   
    public function avancarDia(){
        $dia++;
        if($dia == 31){$dia = 1; $mes++;}
        if($mes == 13){$mes = 1; $ano++;}
    }
}



$date = new Data(10,10,150);

echo $date->getDay(),"/" $date->getMonth(),"/" $date->getYear();














?>