<?php
    /*
     Traduz o seguinte conjunto de classes em um programa PHP.
Classe: Porta - Atributos: aberta, cor, dimensaoX, dimensaoY, dimensaoZ 	Métodos: void abre(), void fecha(), void pinta(Strings).
 	
Classe: Casa - Atributos: cor, porta1, porta2, porta3 Métodos: void pinta(Strings), totalDePortas (int)  quantasPortasEstaoAbertas(int) .
 	
Classe: Edifício - Atributos: cor, totalDePortas, totalDeAndares, portas[] 	Métodos: void pinta(Strings), quantasPortasEstaoAbertas(int), void adicionaPorta(Porta p), totalDePortas(int ), void adicionarAndar(), totalDeAndares(int ).
 	
As classes: Casa e edifício ficaram muito parecidos. Crie a classe Imovel e 	coloque nela tudo o Casa e Edifício tem em comum. Faça Imovel 	superclasse de Casa e Edifício
*/
    class Porta{
        public $aberta;
        public $cor;
        public $x;
        public $y;
        public $z;
        public function abre(){
            $this->aberta = true;
        }
        public function  fecha(){
            $this->aberta = false;
        }
        public function  pinta() {
            
        }


        public function getAberta() { return $this->aberta; }
    
        public function setAberta($aberta) { $this->aberta = $aberta; }
    
        public function getCor() { return $this->cor; }
    
        public function setCor($cor) {$this->cor = $cor; }
    
        public function getX() { return $this->x; }
    
        public function setX($x) { $this->x = $x; }
    
        public function getY() { return $this->y; }
    
        public function setY($y) { $this->y = $y; }
    
        public function getZ() { return $this->z; }
    
        public function setZ($z) { $this->z = $z; }
    }
    
    class Casa extends Imovel{

    }
    class Edfifio extends Imovel{

    }

    class Imovel{
        public $cor;
        public $portas = array();
        public $andares;

        public function portaAberta(){
            $contadorportas = 0;
            foreach($this-> portas as $portas){
                $contadorportas += $portas->getAberta() == true ? 1:0;
            }
            return $contadorportas;
        }

        public function QuantidadeDePortas(){
            return count($this->portas);
        }
        public function totalDeAndares(){
            $this->andares++;
        }
        public function totalDePortas($portas){
            array_push($this->portas, $portas);
        }
        public function getCor(){
            return $this->cor;
        }
        public function setCor($cor){
            $this->cor = $cor;
        }
        public function getPortas() { 
            return $this->portas;
        }
        public function setPortas($portas){
            $this->portas = $portas;
        }
        public function getAndares(){
            return $this->andares; 
        }
        public function setFloors($andares){
            $this->andares = $andares;
        }

    }
 
    
?>