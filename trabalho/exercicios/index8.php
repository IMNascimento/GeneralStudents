<?php


if (empty($_POST['na']) or empty($_POST['ne']) or empty($_POST['ni']) ){
    echo "preencha os campos";

}else{

    $na = $_POST['na'];
    $ne = $_POST['ne'];
    $ni = $_POST['ni'];
    
    if($na > ($ne + $ni)){
        echo "o primeiro numero é maior";
        echo $na;
    } else{
        echo "o numero é menor";

    }



}


?>