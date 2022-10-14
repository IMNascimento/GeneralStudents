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
        @include('functions.php');
        $camp = array("wage","days","hours");
        $type = array("float","int","int");
        $d = check($_POST,$camp, $type);
        echo "Valor da Hora: " . number_format(hourSalary($d['wage'],$d['days'],$d['hours']),2,".","");
    ?>
</body>
</html>