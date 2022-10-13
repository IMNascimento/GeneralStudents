<?php
    /*Escreva uma classe que representa um círculo no plano cartesiano. Forneça os seguintes membros de classe: 
    *Um construtor que inicialize o ponto em um local por parâmetros ou na origem do espaço; 
    * Métodos getter e setter. 
    * Métodos de inflar e desinflar que respectivamente aumentam e diminuem o tamanho do círculo. 
    * Método para mover o círculo a partir de outro ponto ou para a origem do espaço. * Método que retorna a área do círculo.
    */

    
    class Circle {
        
        private $radius;
        private $r;
        private $t;
        
    
        public function Circle($radius,$r = 0, $t = 0 ){
            $this->r = $r;
            $this->t = $t;
            $this->setRadius($radius);
        }
     
        public function area(){ 
            return pi() * ($this->radius * 2); 
        }
    
        public function move($point){
            $this->r = $point->getR();
            $this->t = $point->getT();
        }
    
        public function increase($value){ 
            $this->setRadius($this->radius + $value); 
        }
    
        public function decrease($value){ 
            $this->setRadius($this->radius - $value); 
        }
    
        public function getR(){ 
            return $this->r; 
        }
    
        public function setR($r){ 
            return $this->r; 
        }
    
        public function getT(){ 
            return $this->t; 
        }
    
        public function setT($r){ 
            $this->t;
        }
    
        public function getRadius(){ 
            return $this->radius; 
        }
    
        public function setRadius($radius){ 
            $this->radius = $radius < 0 ? 0 : $radius; 
        }
    }
    
    $circle = new Circle;
    $circle ->setRadius(0);
    var_dump($circle);

?>