<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
<?php
/*
$test="php";
$a=10;
$b=20.8;

echo $test . "<br>";
echo "$test öğreniyorum..<br>";
echo $a . "<br>";
echo $b . "<br>";
echo $a+$b;
*/


$a=4;
$b=3;

function carp(){
    global $a , $b;
    echo $a * $b
;}
 carp();






?>

</body>
</html>