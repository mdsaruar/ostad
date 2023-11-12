<?php

/*
Create an array called $numbers containing the numbers 1 to 10. Write a PHP function which takes the "$numbers" array as an argument 
to remove the even numbers from the array and print the resulting array.
 */

 
// Create an array containing numbers 1 to 10
$numbers = range(1, 10);

// Function to remove even numbers from the array
function removeEvenNumbers(&$arr) {
    foreach ($arr as $key => $value) {
        if ($value % 2 == 0) {
            unset($arr[$key]);
        }
    }
}

// Call the function to remove even numbers
removeEvenNumbers($numbers);

// Print the resulting array
print_r($numbers);
