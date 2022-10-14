<?php

if (empty($_POST['a']) or empty($_POST['b']) ){
    echo "preencha os campos";

}else{

   $a = $_POST['a'];
   $b = $_POST['b'];

    if($a > $b){
    echo "a é maior que b";
   }elseif($a == $b){
    echo "a e b são iguais";
   }else{
    echo "b é maior que a";
}

}

?>