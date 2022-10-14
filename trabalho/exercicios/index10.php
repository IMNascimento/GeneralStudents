<?php

if (empty($_POST['none']) or empty($_POST['ntwo']) or empty($_POST['ntree']) ){
    echo "preencha os campos";
  
}else{
    array_push($campo , $_POST['none'], $_POST['ntwo'], $_POST['ntree']);
    sort($campo);
    echo "ordem crescente: ";
    for ($i = 0; $i < 3 ; $i++){
        echo $campo[$i] . ",";
    }
}

?>