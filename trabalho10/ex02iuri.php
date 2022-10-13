<?php
    class Empregado{

    private $nome;
    private $sobrenome;
    private $salario;   

    private function Empregado($salario, $nome = "SEM NOME", $sobrenome = "SEM S0BRENOME"){
        $this->setNome($nome);
        $this->setsobreNome($sobrenome);
        $this->setSalario($salario);
        
    } 
        public function salarioAumento()
         { $this->salario += $this->salario * 10 / 100; }

        public function getNome()
        { return $this->nome; }
    
        public function setNome($name) 
        {return $this->nome = $nome; }
    
        public function getsobreNome() 
        { return $this->sobrenome; }
    
        public function setsobreNome($sobrenome) 
        { return $this->sobrenome = $sobrenome; }
    
        public function getSalario() 
        { return $salario; }
    
        public function setSalario($salario) 
        { return $this->salario = $salario < 0 ? 0 : $salario; }


}



   

  
?>