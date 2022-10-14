<?php

function calc($x){
    if (isset($_POST['x'])){
        if (!empty($_POST['x']) or $_POST['x'] == 0) {
          $x = $_POST['x'];
        }else {
          echo"Variable empty , results found = ";
        }    
      }else{
        echo "Variable does not exist, results found = " ;
      }

      $total = ($x * 8)*15;
      
      $tenpercent = $total + ($total *0.1);
      $fortypercent = $tenpercent +($tenpercent * 0.4);
      return $fortypercent;
}


    echo calc(0); 





?>