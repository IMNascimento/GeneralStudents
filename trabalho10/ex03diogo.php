<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex - 03</title>
</head>
<body>
    <?php
        class Contador {
            public $numero;
            public function getNumero(){
                return $this->numero;
            } 
            public function setNumero($num){
                $this->numero = $num;
            }
            public function Zerar(){
                $this->setNumero(0);
                return $this->getNumero();
            }
            public function Incrementa(){
                $this->setNumero($this-> getNumero() + 1);
                return $this->getNumero();
            }
        }
        
        $valorum = new Contador();
        $valorum->setNumero(2);
        echo $valorum->getNumero();

        echo"<br/>";

        $valordois = new Contador();
        echo $valordois->Zerar();

        echo"<br/>";

        $valortres = new Contador();
        $valortres->setNumero(5);
        echo $valortres->Incrementa();
        
        /*Feito por Diogo*/


    ?>
</body>
</html>