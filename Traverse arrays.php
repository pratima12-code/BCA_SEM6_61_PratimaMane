<?php
$student = ["name" => "Riya", "roll" => 101];
$employee = ["name" => "Arun", "id" => 5001];
$product = ["name" => "Laptop", "price" => 45000];

echo "Student Details:<br>";
foreach ($student as $key => $value) {
    echo "$key : $value<br>";
}

echo "<br>Employee Details:<br>";
foreach ($employee as $key => $value) {
    echo "$key : $value<br>";
}

echo "<br>Product Details:<br>";
foreach ($product as $key => $value) {
    echo "$key : $value<br>";
}
?>
