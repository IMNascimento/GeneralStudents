<?php

if (empty($_POST['prova1']) or empty($_POST['prova2']) or empty($_POST['prova3']) ){
    echo "preencha os campos";

}else{

    $prova1 = $_POST['prova1'];
    $prova2 = $_POST['prova2'];
    $prova3 = $_POST['prova3'];
    
    if($prova1 >= 7){
        echo"prova1 está aprovado";
        
    }else{
        echo "prova1 está reprovado";
    }
    echo "<br>";
    
    if($prova2 >= 7){
        echo "prova2 está aprovado";
        
    }else{
        echo "prova2 está reprovado";
    }
    echo "<br>";
    if($prova3 >= 7){
        echo  "prova3 está aprovado";
        
    }else{
        echo "prova3 está reprovado";
    }
    echo "<br>";
    
    $final = $prova1 + $prova2 + $prova3 / 7;
    echo "$final";
    echo ".....média total";

} 









?>