<?php
/*
Task 3: Break on Condition
Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
Fibonacci number is greater than 100, break out of the loop using the break statement.
*/


// Function to calculate the nth Fibonacci number
function fibonacci($n)
{
    if ($n <= 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

$count = 0;
for ($i = 0; $count < 10; $i++) {
    $fib = fibonacci($i);

    // Check if the Fibonacci number is greater than 100
    if ($fib > 100) {
        break; // Break out of the loop
    }

    echo $fib . " ";
    $count++;
}
