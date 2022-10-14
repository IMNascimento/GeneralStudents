<?php
$campo = array();
if (empty($_POST['none']) or empty($_POST['ntwo']) or empty($_POST['ntree'])) {
    echo "Preencha o campo ";
}else {
    array_push($campo, $_POST['none'], $_POST['ntwo'] , $_POST['ntree']);
    sort($campo);
    echo"Ordem Crescente:  ";
    for ($i=0; $i <3 ; $i++) { 
       echo $campo[$i] . ",";
    }
}
echo "</br>";
echo "Ordem Decrescente: ";
rsort($campo);
for ($i=0; $i < 3 ; $i++) { 
    echo $campo[$i] . ",";
}

?>