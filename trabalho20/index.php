<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="mainTwo.css">
  <title>Cálculo de serviço</title>
</head>
<body>

<?php


function amountPaid($paidTime){
  $paidTime = $paidTime;
   
  $total = $paidTime * 8;
  $total = $total * 15;
  $additional = $total * 1.1;
  $expensesPublish = $additional * 1.4;
  return $expensesPublish;
}

if(isset($_POST['paidTime'])){
    if(!empty($_POST['paidTime']) or $_POST['paidTime'] == 0){
     echo "O valor do custo total da obra é " . amountPaid($_POST['paidTime']);
    }else{
      echo "O campo não pode ser vazio";
    }
    }else{
      echo "Variavel não existe não bug o codigo";
    }
?>


</body>
</html>