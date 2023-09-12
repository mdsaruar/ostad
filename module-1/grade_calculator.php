<?php
// Task 3: Grade Calculator

// These are the marks of Three subjects
$bangla = 95;
$english = 85;
$math = 74;

// It will calculate total, average, percentage, and grade

$total = $bangla + $english + $math;
$average = $total / 3;
$percentage = ($total / 300) * 100;

//2 dicimal
$average_mark = sprintf("%.2f", $average);
$percentage_2 = sprintf("%.2f", $percentage);


if ($average >= 90)
    $grade = "A";
else if ($average >= 80 && $average < 90)
    $grade = "B";
else if ($average >= 70 && $average < 80)
    $grade = "C";
else if ($average >= 60 && $average < 70)
    $grade = "D";
else
    $grade = "E";

// It will print the final output
echo "\n\n";
echo "The Total marks   = " . $total . "\n\n";
echo "The Average marks = " . $average_mark . "\n\n";
echo "The Percentage    = " . $percentage_2 . "%\n\n";
echo "The Grade         = " . $grade . "\n\n";

?>