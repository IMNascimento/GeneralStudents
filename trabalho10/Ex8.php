<?php
class Pais {

    private $nome;
    private $capital;
    private $tamanho;
    private $bordas = array();
    
    public function Pais($nome = "Sem Nome", $capital = "Sem Capital", $tamanho = 0) {
        $this->nome = $nome;
        $this->capital = $capital;
        $this->tamanho = $tamanho;        
    }
    
    public function Regis($pais){ 
        return ($this->nome == $pais->getName() && $this->capital == $pais->getCapital()) 
        ? true : false; 
    }
    
    public function Vizinhos($pais) {
        $vizinhos = array();
        foreach ($this->bordas as $bordas) {
            foreach ($pais->getBorders() as $nBordas) {
                if ($bordas->Regis($nBordas)) {
                    array_push($vizinhos, $bordas);
                }
            }
        }
        return $vizinhos;
    }
    
    function getName(){ 
        return $this->nome; 
    }

    function getCapital(){ 
        return $this->capital; 
    }

    function getSize(){ 
        return $this->tamanho; 
    }

    function getBorders(){ 
        return $this->bordas; 
    }

    function setName($nome){ 
        $this->nome = $nome; 
    }

    function setCapital($capital){ 
        $this->capital = $capital; 
    }

    function setSize($tamanho){ 
        $this->tamanho = $tamanho; 
    }

    function setBorders($bordas) { 
        foreach ($bordas as $border) {
            if ($this->Regis($border)){
                return false;
            }
        }
        $this->bordas = $bordas;
    }
}
?>