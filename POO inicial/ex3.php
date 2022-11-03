<?php

/*Crie uma classe chamada Ingresso que possui um atributo valor  
e um método imprimeValor().OK 

Depois crie uma classe VIP, que herda Ingresso e possui um atributo valor adicional.
Crie um método que retorne o valor do ingresso VIP (com o adicional incluído). OK

Depois crie uma classe Normal, que herda Ingresso e 
possui um método Ingresso que imprime: "Ingresso Normal". OK

Logo após crie uma classe CamaroteInferior 
(que possui o atributo localização do ingresso e métodos para acessar e imprimir esta localização).
OK

e uma classe CamaroteSuperior, que é mais cara (possui o atributo valor adicional). 
Esta última possui um método para retornar o valor do ingresso.
Ambas as classes herdam a classe VIP. 
OK
*/


class Ingresso{
    private $valor;

    public function getValor(){
        return $this->valor;
    }
    public function setValor($valor){
        $this->valor = $valor;
        return $this;
    }
    public function imprimeValor(){

    }
}

class Vip extends Ingresso{
    private $valorAdicional;

    public function getValorAdicional(){
        return $this->valorAdicional;
    }
    public function setValorAdicional($x){
        $this->valorAdicional = $x;
        return $this;
    }
    public function imprimeValor(){
        return $this->getValor()+$this->getValorAdicional();
    }
}

class Normal extends Ingresso{
    public function Ingresso(){
        echo "Ingresso Normal";
    }

}


class CamaroteInferior extends Vip{
    private $localizacaoIngresso;

    public function getLocalizacaoIngresso(){
        return $this->localizacaoIngresso;
    }
    public function setLocalizacaoIngresso($valor){
        $this->localizacaoIngresso = $valor;
        return $this;
    }

    public function imprimirLocalizacao(){
        echo $this->getLocalizacaoIngresso();
    }
}


class CamaroteSuperior extends Vip{
    private $valorCamaroteSuperior;
    
    public function getValorCamaroteSuperior(){
        return $this->valorCamaroteSuperior;
    }
    public function setValorCamaroteSuperior($valor){
        $this->valorCamaroteSuperior = $valor;
        return $this;
    }

    public function valorIngresso(){
        return $this->imprimeValor()+$this->getValorCamaroteSuperior();
    }
}
/*
$ingresso = new CamaroteSuperior;
$ingresso->setValor(50);
$ingresso->setValorAdicional(50);
$ingresso->setValorCamaroteSuperior(20);
echo $ingresso->valorIngresso();
*/















?>