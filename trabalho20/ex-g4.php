<?php
/*
4 - Desenvolver uma função para o governo onde ela calcula
o tempo que o empregado demora para executar o serviço.
Exemplo: quando o usuário entra ele clica em um botão iniciar
quando ele termina o usuário clica no botão finalizar e exibe o tempo gasto.
*/

$tempoatual= date("H:i:s");
sleep(5);
$tempofinal= date("H:i:s");

/*
function Tempoincial ($tempoatual){
  return $tempoatual;
}
function Tempofinal ($tempofinal){
  return $tempofinal;
}
*/

function Tempototal($tempofinal,$tempoatual){
    $tempototal = $tempofinal - $tempoatual;
    return $tempototal;
}

echo "Hora inicial: " . $tempoatual;
echo "<br>";
echo "Hora final: " . $tempofinal;
echo "<br>";
echo "O tempo do SERVIÇO foi: " . Tempototal ($tempofinal,$tempoatual);
echo "<br>";


 ?>
