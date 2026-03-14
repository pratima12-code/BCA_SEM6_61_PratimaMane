<?php
$arr = [10, 45, 78, 23, 89, 34];
$max = $arr[0];

foreach ($arr as $value) {
    if ($value > $max) {
        $max = $value;
    }
}

echo "Largest element = $max";
?>
