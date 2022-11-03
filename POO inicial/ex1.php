<?php

class Carro
{
  public $modelo;
  public $preco;
  public $tipo;
  public $tamanhoDaRoda;
  public $cambio;
  public $direcao;
  public $cilindrada;
  public $motor;
  function __construct($modelo, $tipo, $preco)
  {
    $this->modelo =$modelo;
    $this->tipo = $tipo;
    $this->preco = $preco;
  }

    public function getModelo()
    {
        return $this->modelo;
    }
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }


    public function getPreco()
    {
        return $this->preco;
    }
    public function setPreco($preco)
    {
        $this->preco = $preco;

        return $this;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }
    public function getTamanhoDaRoda()
    {
        return $this->tamanhoDaRoda;
    }
    public function setTamanhoDaRoda($tamanhoDaRoda)
    {
        $this->tamanhoDaRoda = $tamanhoDaRoda;

        return $this;
    }
    public function getCambio()
    {
        return $this->cambio;
    }
    public function setCambio($cambio)
    {
        $this->cambio = $cambio;

        return $this;
    }
    public function getDirecao()
    {
        return $this->direcao;
    }
    public function setDirecao($direcao)
    {
        $this->direcao = $direcao;

        return $this;
    }
    public function getCilindrada()
    {
        return $this->cilindrada;
    }
    public function setCilindrada($cilindrada)
    {
        $this->cilindrada = $cilindrada;

        return $this;
    }
    public function getMotor()
    {
        return $this->motor;
    }
    public function setMotor($motor)
    {
        $this->motor = $motor;
        return $this;
    }

public function ligar(){
  echo "O carro está ligado<br />";
}

public function desligar(){
  echo "O carro está desligado<br />";
}

}
$value =  2300.00;
$gol = new Carro("Gol G4","4 portas",$value);
echo $gol->getModelo()."<br />";
echo $gol->getTipo()."<br />";
echo $gol->getPreco()."<br />";
echo "<br /><br /><br />";
$gol->ligar();
$gol->desligar();






 ?>
