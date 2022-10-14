<?php

function check($array, $campos, $tip){
  try {
    $ar = array();
    $i=0;
    if (empty($array)) {
      throw new Exception("User manipulated input field and removed the names.");
    }
    if (count($array) != count($campos)) {
      throw new Exception("User manipulated input field and removed some names.");
    }
    foreach ($array as $key => $value[0]) {
      $key = $campos[$i];
      if (!empty($value[0]) or $value[0] == 0 ) {
        $ar[$key] = Valide($tip[$i], $value[0]);
      }else {
        throw new Exception($key." = "."Empty variable");
      }
      $i++;
    }
    return $ar;
  } catch (\Exception $e) {
    $d = "<br><b>". $e . "</b><br />";
    LogErrorTxt($e);
    LogErrorHTML($d);
    header('Location: /');
  }
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
function LogErrorTxt($erro){
  $p = __DIR__;
	$arquivo = "\log.txt";
	$fp = fopen($p.$arquivo, "a+");
	fwrite($fp, $erro);
	fclose($fp);
}
function LogErrorHTML($erro){
  $p = __DIR__;
	$arquivo = "\log.html";
	$fp = fopen($p.$arquivo, "a+");
	fwrite($fp, $erro);
	fclose($fp);
}





















?>