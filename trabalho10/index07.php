 <!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EX07.PHP</title>
</head>
<body>
  <?php 
      //Classe: Porta - Atributos: aberta, cor, dimensaoX, dimensaoY, dimensaoZ 
    //Métodos: void abre(), void fecha(), void pinta(Strings)

    class Porta{
            public $aberta;
            public $cor;
            public $dimensaox;
            public $dimensaoy;
            public $dimensaoz;

          public function pinta() :string{
            
            
          }
          public function abre(){
            
          }
          public function fecha(){
              
          }
          
        }

        //Classe: Casa - Atributos: cor, porta1, porta2, porta3 Métodos: void pinta(Strings),
      // totalDePortas (int)  quantasPortasEstaoAbertas(int) .
      
    class Casa{
            public $cor;
            public $porta1;
            public $porta2;
            public $porta3;

          public function  pinta() :string{

          }
          public function  totalDePortas(){

          }
          public function quantasPortasEstaoAbertas(){

          }
        }
      //Classe: Edifício - Atributos: cor, totalDePortas, totalDeAndares, portas[] 	
      //Métodos: void pinta(Strings), quantasPortasEstaoAbertas(int), void adicionaPorta(Porta p),
      // totalDePortas(int ), void adicionarAndar(), totalDeAndares(int ).

    class Edifico{
            public $cor;
            public $totalDePortas;
            public $totalDeAndares;
            public $portas;
           
            public function pinta() :string{

            }
            public function quantasPortasEstaoAbertas() :int{

            }
            public function adicionaPorta(){

            }
            public function totalDePortas() :int{

            }
            public function adicionarAndar(){

            }
            public function totalDeAndares() :int{

            }
        
        }
      //As classes: Casa e edifício ficaram muito parecidos. Crie a classe Imovel e 	
      //coloque nela tudo o Casa e Edifício tem em comum. Faça Imovel 	
      //superclasse de Casa e Edifício

    class Imovel{
            public $cor;
            public $porta1;
            public $porta2;
            public $porta3;
            public function  pinta() :string{

            }
            public function  totalDePortas(){
            }
            public function quantasPortasEstaoAbertas(){

            }

         
       class Casa extends Imovel{

      }
      class  Edificio extends Imovel{

      }

          
    }

    



  ?>

</body>
</html>