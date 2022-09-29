<?php

// refatorar passando so um array e passar no lugar a key como campo e o erro
/*
function check($array, $campos){
  $erro = array();
  $cert = array();
  $i=0;
  foreach ($array as $key => $value) {
    if (isset($key) AND $key == $campos[$i]){
      if (!empty($key) or $value == 0) {
        $cert[$key] = $value;
      }else {
        $erro[$key]  = "Variavel vazia";
      }
    }else {
      // passar o campo e passar na array cert com esse erro
      $erro[$campos[$i]] = "Variavel não existe";
    }
    $i++;
  }
  $count = count($campos);
  $return = array("certo"=>$cert,"erro"=>$erro, "quantidade"=>$count);
  $r = erroAcert($return);
  return $r;
}

function checkFields($array, $field){
  $check = check($array, $field);
  $result = array();
  if ($check == 1) {
    echo "você tentou burla o sistema";
  }else {
    foreach ($check as $key => $value) {
      $result[$key] = $value[0];
    }
    return $result;
  }

}
function erroAcert($array){
  if (count($array["certo"]) == $array["quantidade"]) {
    return $array["certo"];
  }else{
    return $array["erro"];
  }
}
*/

function check($array, $campos, $tip){
  $ar = array();
  $i=0;
  foreach ($array as $key => $value[0]) {
    $key = $campos[$i];
    if (!empty($value[0]) or $value[0] == 0 ) {
      $ar[$key] = Valide($tip[$i], $value[0]);
    }else {
      $ar[$key]  = "Variavel vazia";
    }
    //$ar[$key] = $value;
    $i++;
  }

  return $ar;

}
function Valide($tipo, $valor){
switch ($tipo) {
  case 'string':
      return strval($valor);
    break;
  case 'int':
      return intval($valor);
    break;
  case 'float':
    return floatval($valor);
    break;
  default:
    break;
}
}
























?>
