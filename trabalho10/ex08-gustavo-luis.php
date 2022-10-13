<?php
class Pais {

    private $nome;
    private $capital;
    private $tamanho;
    private $fronteiras = array();
    
    public function Pais($nome = "SEM NOME", $capital = "SEM CAPITAL", $tamanho = 0) {
        $this->nome = $nome;
        $this->capital = $capital;
        $this->tamanho = $tamanho;        
    }
    
    public function igual($pais) { return ($this->nome == $pais->getNome() && $this->capital == $pais->getCapital()) ? true : false; }
    
    public function Vizinho($pais) {
        $Vizinho = array();
        foreach ($this->fronteiras as $fronteira) {
            foreach ($pais->getFronteiras() as $nFronteira) {
                if ($fronteira->igual($nFronteira)) {
                    array_push($Vizinho, $fronteira);
                }
            }
        }
        return $Vizinho;
    }
    
    function getNome() { return $this->nome; }

    function getCapital() { return $this->capital; }

    function getTamanho() { return $this->tamanho; }

    function getFronteiras() { return $this->fronteiras; }

    function setNome($nome) { $this->nome = $nome; }

    function setCapital($capital) { $this->capital = $capital; }

    function setTamanho($tamanho) { $this->tamanho = $tamanho; }

    function setFronteiras($fronteiras) { 
        foreach ($fronteiras as $fronteira) {
            if ($this->igual($fronteira)) {return false;}
        }
        $this->fronteiras = $fronteiras;
    }
}
