<?php

function oilValue($valueOil, $reajustValue){
    $calculateValue = $valueOil * (40/100); 
    $calculateReadjustment= ($reajustValue /100) + $valueOil ;
    return $calculateValue + $calculateReadjustment;
}

if (empty($_POST['value']) or empty($_POST['valuereadjustment']) ){
    echo "Preencha os campos" ;
}else{
 
    if($_POST['readjustment'] == "+"){
        echo "Valor cobrado na União Europeia: €";
        echo oilValue($_POST['value'] , $_POST['valuereadjustment']);
    }else{
        echo "Valor cobrado na União Europeia: €";
        echo oilValue($_POST['value'], $_POST['valuereadjustment']);
    }
}

?>