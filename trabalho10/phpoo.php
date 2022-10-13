<?php

class Empregado{
    public $nome;
    public $sobrenome;
    public $salario;
}

  function Empregado(){
    $this->nome = "Andre";
    $this->sobrenome = "Felipe";
    $this->salario = 403.56;
  }

  public function getNome(){
    return $this->nome;
  }
  
  public function setNome($_nome){
    $this->nome= $_nome;
  }


  public function getSobrenome(){
    return $this->sobrenome;
  }
  
  public function setSobrenome($_sobrenome){
    $this->sobrenome = $_sobrenome;
  }

  public function getSalario(){
    return $this->salario;


  public function setSalario($_resultado){
    if($salario > 0.0){
         $resultado = $salario * (10/100);
         $this->salario = $_resultado
        }else{
        echo "sem alteração no salario" . $salario;
    }

   
     }

}
