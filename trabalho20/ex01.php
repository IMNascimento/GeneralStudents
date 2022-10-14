<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESULTADO</title>
</head>
<body>
    <?php
        function hourSalary($wage, $days, $hours){
            $hourSalary = ($wage/($days*$hours));
            return $hourSalary;
        }
        if (isset($_POST['wage']) and isset($_POST['days']) and isset($_POST['hours']) ) {
            if (!empty($_POST['wage'])and !empty($_POST['days']) and !empty($_POST['hours'])) {
                echo "Valor da Hora: " . number_format(hourSalary($_POST['wage'],$_POST['days'],$_POST['hours']),2,".","");
            } else {
                echo "PRENCHA O CAMPO";
            }
        }else{
            echo "!!! ERRO !!!";
        }  
    ?>
</body>
</html>