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
//var_dump($d);
extract($d, EXTR_SKIP);
echo $number;
echo " , ";
echo $name;
echo " , ";
echo $teste;
echo " , ";
echo $num;
echo "<br />";
echo "<br />";
echo $d['number'];
echo $d['name'];
echo $d['teste'];
echo $d['num'];

//var_dump($_POST);























?>
