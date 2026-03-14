<?php
$a = 10;
$b = 20;

echo "Before swap: a=$a, b=$b<br>";

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "After swap: a=$a, b=$b";
?>
