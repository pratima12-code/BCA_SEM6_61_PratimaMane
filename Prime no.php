<?php
function isPrime($num) {
    if ($num < 2) return false;

    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

$n = 17;

if (isPrime($n)) {
    echo "$n is Prime";
} else {
    echo "$n is Not Prime";
}
?>
