<?php

echo "ex-05";
class Circle {

    public $x;
    public $y;
    public $radius;

    public function circulo($raio,$x = 0, $y = 0 ) {
        $this->x = $x;
        $this->y = $y;
        $this->setRaio($raio);
    }
 
    public function area() { return pi() * ($this->raio * 2); }

    public function move($ponto) {
        $this->x = $ponto->getX();
        $this->y = $ponto->getY();
    }

    public function aumentar($value) { $this->setraio($this->raio + $value); }

    public function subtrair($value) { $this->setraio($this->raio - $value); }

    public function getX() { return $this->x; }

    public function setX($x) { $this->x = $x; }

    public function getY() { return $this->y; }

    public function setY($y) { $this->y = $y;}

    public function getraio() { return $this->raio;}

    public function setraio($raio) { $this->raio = $raio < 0 ? 0 : $raio;}
}

?>