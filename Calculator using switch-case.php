<?php
$a = 12;
$b = 4;
$op = "*";

switch ($op) {
    case "+":
        echo "Addition = " . ($a + $b);
        break;
    case "-":
        echo "Subtraction = " . ($a - $b);
        break;
    case "*":
        echo "Multiplication = " . ($a * $b);
        break;
    case "/":
        if ($b != 0) {
            echo "Division = " . ($a / $b);
        } else {
            echo "Division by zero not allowed";
        }
        break;
    default:
        echo "Invalid operator";
}
?>
