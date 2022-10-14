<?php

function generateRand()
{


    if ($_POST['number1'] <= $_POST['number2']) {

        $result = rand($_POST['number1'], $_POST['number2']);

        return $result;
    }
}

function students($number)
{
    $students = array("Alef","Regis","Andre Felipe", "Andre Junior", "Gustavo", "Iuri", "Joao Paulo", "Luis", "Leonardo", "Maria Eduarda", "Julia", "Tabita", "Pedro Gomes", "Pedro Silva", "Pedro Silva", "Diogo");
    $result = array("Estudantes" => $students[$number], "Numero" => $number);
    return $result;
}


$d = students(generateRand());
echo $d['Estudantes'];
echo $d['Numero'];
