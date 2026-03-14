<?php
// 1 = Present, 0 = Absent
$attendance = [
    "Monday" => 1,
    "Tuesday" => 1,
    "Wednesday" => 0,
    "Thursday" => 1,
    "Friday" => 1,
    "Saturday" => 0,
    "Sunday" => 1
];

$totalDays = count($attendance);
$presentDays = array_sum($attendance);

$overallPercentage = ($presentDays / $totalDays) * 100;

echo "Day-wise Attendance:<br>";
foreach ($attendance as $day => $status) {
    $percent = $status * 100;
    echo "$day : $percent%<br>";
}

echo "<br>Weekly Attendance Percentage: " . round($overallPercentage, 2) . "%<br>";
echo "Overall Attendance Percentage: " . round($overallPercentage, 2) . "%";
?>
