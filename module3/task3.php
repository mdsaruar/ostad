<?php
/*
Task 3: Array Sorting  

Create an array called $grades with the following values: 85, 92, 78, 88, 95. Write a PHP function which takes "$grades" 
as an argument to sort the array in descending order and print the sorted grades as array.

*/
function sortGradesDescending($grades) {
    // Use the rsort() function to sort the grades in descending order
    rsort($grades);

    // Print the sorted grades as an array
    echo "Sorted Grades (Descending Order):\n";
    print_r($grades);
}

// Define the array of grades
$grades = array(85, 92, 78, 88, 95);

// Call the function to sort and print the grades
sortGradesDescending($grades);