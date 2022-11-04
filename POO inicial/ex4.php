<?php

abstract class Animal 
{
    public $raca;
    public $name;

    public function __construct($name, $raca){
        $this->raca = $raca;
        $this->name = $name;
    }

    public function caminhar(){
        echo "estou caminhando";
    }
}

class Cachorro extends Animal
{
    public function latir(){
        echo "Eu me chamo: " . $this->name . " minha raça é: ". $this->raca . "Latir<br/>";
    
    }
}

class Gato extends Animal
{
    public function miar(){
        echo "Eu me chamo: " . $this->name . " minha raça é: ". $this->raca . "miar<br/>";
    }
}

$gato = new Gato("Melo", "Angorar");
$gato->miar();
$gato->caminhar();

$cachorro = new Cachorro("Rex", "PitBull");
$cachorro->latir();
$cachorro->caminhar();



?>