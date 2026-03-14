<?php
$dob = "2004-08-15";
$birthDate = new DateTime($dob);
$today = new DateTime("today");
$age = $birthDate->diff($today)->y;

echo "Age: $age years";
?>
