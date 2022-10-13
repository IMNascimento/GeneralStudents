<?php
class Empregado {

    private $nome;
    private $sobrenome;
    private $salario;

    public function Empregado($salario, $nome = "Nome", $sobrenome = "Sobrenome") {
        $this->setNome($nome);
        $this->setSobrenome($sobrenome);
        $this->setSalario($salario);
    }

    public function salarioAumentar() { $this->salario += $this->salario * 10 / 100; }

    public function getNome() { return $this->nome; }

    public function setNome($nome) { $this->nome = $nome; }

    public function getSobrenome() { return $this->sobrenome; }

    public function setSobrenome($sobrenome) { $this->sobrenome = $sobrenome; }

    public function getSalario() { return $salario; }

    public function setSalario($salario) { $this->salario = $salario < 0 ? 0 : $salario; }
}

?>