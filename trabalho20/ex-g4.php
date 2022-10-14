<?php
/*
4 - Desenvolver uma função para o governo onde ela calcula
o tempo que o empregado demora para executar o serviço.
Exemplo: quando o usuário entra ele clica em um botão iniciar
quando ele termina o usuário clica no botão finalizar e exibe o tempo gasto.
*/

$time1= date("H:i:s");
sleep(5);
$time2= date("H:i:s");

/*
function Tempoincial ($time1){
  return $time1;
}
function Tempofinal ($tempofinal){
  return $tempofinal;
}
*/

function Tempototal($time2,$time1){
    $time = $time2 - $time1;
    return $tempototal;
}

echo "Hora inicial: " . $time1;
echo "<br>";
echo "Hora final: " . $time2;
echo "<br>";
echo "O tempo do SERVIÇO foi: " . Tempototal ($time1,$time2;
echo "<br>";


 ?>
