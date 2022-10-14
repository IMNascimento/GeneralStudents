<?php

function media($nota1, $nota2, $nota3){
    $media = ($nota1 + $nota2 + $nota3) / 3;
    echo "A media é: ". $media;
}
function mediapond($nota1 , $nota2 , $nota3 ){
    $mediaponderada = ($nota1*2) + ($nota2*3) + ($nota3*5 )/1 + 2 + 3;
    echo "A media ponderada é: " . $mediaponderada;
}
if (empty($_POST['nota1']) OR empty($_POST['nota2']) OR empty($_POST['nota3'])){
    echo "Preencha os campos";
}else {
 media($_POST['nota1'],$_POST['nota2'],$_POST['nota3']);
 echo "<br>";
 mediapond($_POST['nota1'],$_POST['nota2'],$_POST['nota3'])  ;
}

?>



