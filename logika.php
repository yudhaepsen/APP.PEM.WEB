<?php
$a = true;
$b = false;

//variable $c akan bernilai FALSE

$c = $a && $b;
printf("%b && %b = %b", $a,$b,$c);
echo "<hr>"; 

//var c TRUE
$c = $a || $b;
printf("%b || %b = %b", $a,$b,$c);
echo "<hr>";  

//var $c akan bernilai false$
$c = ! $a;
printf("!%b=%b", $a,$c);
echo "<hr>"; 

?>