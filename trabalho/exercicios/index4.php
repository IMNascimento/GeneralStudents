<?php

if(empty($_POST['Farehait'])){
    echo "preencha os campos";


$Farehait = $_POST['Farehait'];


$celsius = ($Farehait - 32) / 1.8;
  echo "para Celsius fica" . $celsius;

?>