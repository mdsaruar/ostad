<?php

/*
Create a multidimensional array called $studentGrades to store the grades of three students.
Each student has grades for three subjects: Math, English, and Science.
Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.

*/


// Define the multidimensional array $studentGrades
$studentGrades = array(
    'Student 1' => array('Math' => 100, 'English' => 82, 'Science' => 78),
    'Student 2' => array('Math' => 35, 'English' => 35, 'Science' => 40),
    'Student 3' => array('Math' => 85, 'English' => 70, 'Science' => 45)
);
// Function to calculate and print the average grade for each student
function calculateAndPrintAverages($grades)
{
    // Define grade ranges and corresponding labels
    $gradeRanges = array(
        'A+' => array('min' => 80, 'max' => 100),
        'A'  => array('min' => 70, 'max' => 79),
        'A-' => array('min' => 60, 'max' => 69),
        'B'  => array('min' => 50, 'max' => 59),
        'C'  => array('min' => 40, 'max' => 49),
        'D'  => array('min' => 33, 'max' => 39)
    );
    foreach ($grades as $student => $subjects) {
        $total = array_sum($subjects);
        $count = count($subjects);
        $average = $total / $count;
        // Determine the grade based on the average score
        $grade = '';
        //to make the value always in integer
        $average = intval($total / $count);
        foreach ($gradeRanges as $label => $range) {
            if ($average >= $range['min'] && $average <= $range['max']) {
                $grade = $label;
                break;
            }
        }
        echo "$student-Average Score:$average - Average Grade: $grade\n";
    }
}
// Call the function with the $studentGrades array
calculateAndPrintAverages($studentGrades);
