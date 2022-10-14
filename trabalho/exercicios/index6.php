<?php

if (empty($_POST['brancos']) or empty($_POST['nulos']) or empty($_POST['validos']) ){
    echo "preencha os campos";

}else{

    $brancos = $_POST['brancos'];
    $nulos = $_POST['nulos'];
    $validos = $_POST['validos'];
    
    $soma = $brancos + $nulos + $validos;
    echo "total de pessoas" . $soma;
    
    
    $porc1 = $brancos/$soma*100;
    echo "porcentagem de votos brancos" .   $porc1;
    
    
    $porc2 = $nulos/$soma*100;
    echo  "porcentagem de votos nulos" . $porc2;
    
    
    $porc3 = $validos/$soma*100;
    echo   "porcentagem de votos validos"  .   $porc3;


}
function branco($votobranco, $nulos , $validos) {
    $soma = $brancos + $nulos + $validos;
    $porcent =$brancos/$soma*100;
    echo "Total de eleitores: ". $votobranco;
    echo "Esse numero representa ". $porcent;
}
function nulo($votosnulo) {

}




?>