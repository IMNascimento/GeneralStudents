<?php



if(empty($_POST['largura']) AND empty($_POST['altura'])){
    echo "preencha os campos";

}else{

     $altura  = $_POST['largura'];
     $largura = $_POST['altura'];
    
    $raio = $largura /2;
    $total = (2 * pi()) * ($raio * $raio) + (2 * pi()) * $raio * $altura;
    echo "a area total é" . $total;
    

}


?>