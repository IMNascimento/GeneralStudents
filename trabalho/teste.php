<?php
@include('functions.php');

$camp = array("number","name","teste","num");
$type = array("int","int","string","string");
/*$t = checkFields($_POST,$camp);
//echo json_encode($t);
extract($t, EXTR_SKIP);
echo $number;
echo $name;
echo $teste;
*/
$d = check($_POST,$camp, $type);
extract($d, EXTR_SKIP);
echo $number;
//var_dump($number);
echo $name;
//var_dump($name);
echo $teste;
//var_dump($teste);
echo $num;
//var_dump($num);


























?>
