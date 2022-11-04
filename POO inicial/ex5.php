<?php

interface MovimentoCarro{

    public function acelerar();
    public function frear();
    public function virarEsquerda();
    public function virarDireita();

}

class Automovel implements MovimentoCarro
{
    private $modelo;
    private $ano;
    private $velocidade;
    private $marca;

    public function __construct($x,$y,$z){
        $this->setMarca($z);
        $this->setModelo($x);
        $this->setAno($y);
        $this->setVelocidade(0);
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($x){
        $this->modelo = $x;
        return $this;
    }

    public function getAno(){
        return $this->ano;
    }
    public function setAno($y){
        $this->ano = $y;
        return $this;
    }
    public function getVelocidade(){
        return $this->velocidade;
    }
    public function setVelocidade($xdf){
        $this->velocidade = $xdf;
        return $this;
    }

    public function getMarca(){
        return $this->marca;
    }
    public function setMarca($marca){
        $this->marca = $marca;
        return $this;
    }

    public function acelerar(){
        $x = $this->getVelocidade()+5;
        $this->setVelocidade($x);
        return $this->getVelocidade();
    }
    public function frear(){
        $f = $this->getVelocidade() - 5;
        $this->setVelocidade($f);
        return $this->getVelocidade();
    }
    public function virarDireita(){
        echo"Virei para direita<br/>";
    }
    public function virarEsquerda(){
        echo"Virei para esquerda<br/>";
    }

    public function ligar(){
        echo"Liguei o carro<br/>";
    }
    public function desligar(){
        echo"Desliguei o carro<br/>";
    }
    public function dirigir(){
        $this->ligar();
        echo "eu acelerei: " . $this->acelerar() . " KM/h<br/>";
        echo "eu acelerei: " . $this->acelerar() . " KM/h<br/>";
        for ($i=0; $i < 10; $i++) { 
            $this->acelerar();
        }
        $this->virarEsquerda();
        echo "eu acelerei: " . $this->acelerar() . " KM/h<br/>";
        $this->virarEsquerda();
        echo "eu acelerei: " . $this->acelerar() . " KM/h<br/>";
        $this->virarDireita();
        echo "eu desacelerei: " . $this->frear() . " KM/h<br/>";
        $this->desligar();
    }

}


$audi = new Automovel("Q3","2020", "Audi");
echo $audi->getMarca() . "  ";
echo $audi->getModelo() . "  ";
echo $audi->getAno() . " <br/>";
$audi->dirigir();









?>