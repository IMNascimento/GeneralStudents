<?php

/**
 *
 */
class Contador
{
  public $contador;
  public function adiocinar ($total){
    $this->contator += $total;
  }
  public function zerar (){
    $this->contador = 0;
  }

  public function getContador(){
    return $this->contador;
    }
  public function setContador(){
    $this->$contador = $contador;
    }
}

 ?>
