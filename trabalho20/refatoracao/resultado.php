<?php
$camp = array("x");
$type = array("float");
function calc($x){  
  $x = $_POST['x'];
  $total = ($x * 8)*15;    
  $tenpercent = $total + ($total *0.1);
  $fortypercent = $tenpercent +($tenpercent * 0.4);
  return $fortypercent;
}

$c = check($array, $campos, $tip);

calc($c['x']);




?>