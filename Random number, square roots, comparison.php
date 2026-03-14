<?php
$num = rand(1, 100);
$sqrt1 = sqrt($num);

$doubled = $num * 2;
$sqrt2 = sqrt($doubled);

echo "Random Number: $num<br>";
echo "Square Root of $num: " . round($sqrt1, 2) . "<br>";
echo "Doubled Number: $doubled<br>";
echo "Square Root of $doubled: " . round($sqrt2, 2) . "<br>";

if ($sqrt1 > $sqrt2) {
    echo "Maximum = " . round($sqrt1, 2) . "<br>";
    echo "Minimum = " . round($sqrt2, 2);
} else {
    echo "Maximum = " . round($sqrt2, 2) . "<br>";
    echo "Minimum = " . round($sqrt1, 2);
}
?>
