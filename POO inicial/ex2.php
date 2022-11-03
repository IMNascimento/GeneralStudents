<?php


class Animal
{
  private $nome;
  private $comincacao;
  private $som;
  private $tipo;
  function __construct($name)
  {
    $this->nome = $nome;
  }
  public function getNome()
  {
      return $this->nome;
  }


  public function setNome($nome)
  {
      $this->nome = $nome;

      return $this;
  }

  public function getComincacao()
  {
      return $this->comincacao;
  }

  public function setComincacao($comincacao)
  {
      $this->comincacao = $comincacao;

      return $this;
  }

  public function getSom()
  {
      return $this->som;
  }

  public function setSom($som)
  {
      $this->som = $som;

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

public function falar()
{

}
public function movimento()
{

}
}
class Cachorro extends Animal
{

  function falar()
  {
    echo "Sou cachorro<br />";
  }

  public function movimento()
  {
    echo "tenho quatro patas<br />";
  }

}


































 ?>
