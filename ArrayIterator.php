<?php
$array = [
'A','B',
'C'=>[
    'D','E',
    'F'=>['G','H']
],
'I','J'
];

echo json_encode($array);
echo "<br />";
echo "<br />";
echo "<br />";
$iterator = new RecursiveArrayIterator($array);

foreach($iterator as $key=>$value)
{
    echo $key,':', $value,'<br>';
}

/*
Output
0:A
1:B
C:Array
2:I
3:J
*/

//-------------
//Recursive...
echo "<br />";
echo "<br />";
echo "<br />";
$array = [
'A','B',
'C'=>[
    'D','E',
    'F'=>['G','H']
],
'I','J'
];

$it = new RecursiveArrayIterator($array);
$iterator = new RecursiveIteratorIterator($it);

foreach($iterator as $key=>$value)
{
    echo $key,':', $value,'<br>';
}

/*
Output
0:A
1:B
0:D
1:E
0:G
1:H
2:I
3:J
*/

?>
