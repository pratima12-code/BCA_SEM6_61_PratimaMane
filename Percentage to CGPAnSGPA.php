<?php
$percentage = 78;

// Common simple formula: CGPA = percentage / 9.5
$cgpa = $percentage / 9.5;

// Example assumption: SGPA same scale for demo
$sgpa = $percentage / 10;

echo "Percentage: $percentage%<br>";
echo "CGPA: " . round($cgpa, 2) . "<br>";
echo "SGPA: " . round($sgpa, 2);
?>
