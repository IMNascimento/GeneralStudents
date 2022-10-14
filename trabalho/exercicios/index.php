
<?php


if(empty($_POST['base']) AND empty($_POST['altura'])){
    echo "preencha os campos";
}else{
    $altura = $_POST['altura'];
    $base = $_POST['base'];
    $calc = $altura * $base;
    echo "a area do retangulo9 é" . $calc;
    $perimeter = ($altura + $base) * 2;
    echo "<br>";
    echo "o perimetro é" . $perimeter;
}






?>


</body>
</html>

