<?php
class Ponto2d {

    private $x;
    private $y;

    public function Ponto2d($x = 0, $y = 0) {
        $this->x = $x;
        $this->y = $y;
    }

    public function distancia($ponto2d) {
        return array(
            "x" => $this->x - $ponto2d>getX(),
            "y" => $this->y - $ponto2d->getY(),
        );
    }

    public function mover($ponto2d) {
        $this->x = $ponto2d->getX();
        $this->y = $ponto2d->getY();
    }

    public function equal($ponto2d) { return ($this->x == $ponto2d->getX() && $this->y == $ponto2d->getY()) ? true : false; }

    public function clone() 
    { return new Ponto2d($this->x, $this->y); }

    public function getX() 
    { return $this->x; }

    public function setX($x)
     { $this->x = $x; }

    public function getY() 
    { return $this->y; }

    public function setY($y) 
    { $this->y = $y; }
}