<?php


if (empty($_POST['salario']) or empty($_POST['percentual']) or empty($_POST['reajuste']) ){
    echo "preencha os campos";

}else{
    if ($_POST['reajuste'] == "+"){
        $per = ($_POST['percentual']/100);
        $calc = $_POST['salario']*$per;
        echo "o salario reajustado é: " .$_POST['salario']+$calc;
        echo "<br>";
        echo " o reajustado foi de: " . $calc;
    
    }else{
        $per = ($_POST['percentual']/100);
        $calc = $_POST['salario']*$per;
        echo "o salario reajustado é: " . $_POST['salario'] - $calc;
        echo "<br>";
        echo "o reajustado foi de: " . $calc;
    }
}





echo "<br>";
echo "<br>";








?>