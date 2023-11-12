<?php
// PHP Script to Calculate Total Marks of Student and Display Grade

// These are the marks of five subjects
$sub_1 = 95;
$sub_2 = 85;
$sub_3 = 74;

$total = NULL;
$average = NULL;
$percentage = NULL;
$grade = NULL;

// It will calculate total, average, percentage, and grade
$total = $sub_1 + $sub_2 + $sub_3;
$average = $total / 3.0;
$percentage = ($total / 300.0) * 100;

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
echo "The Total marks   = " . $total . "/300\n";
echo "The Average marks = " . $average . "\n";
echo "The Percentage    = " . $percentage . "%\n";
echo "The Grade         = '" . $grade . "'\n";

?>