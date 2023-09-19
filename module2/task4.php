<?php

/*
Task 4: Fibonacci Series printing using a Function
Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take
this 15 as an argument of a function and use a for loop to generate these numbers and print
them by calling the function.
*/

function printFibonacci($n) {

    $first = 0;
    $second = 1;

    echo "Fibonacci Series for the first $n numbers:\n";

    for ($i = 1; $i <= $n; $i++) {
        echo $first;

        if ($i < $n) {
            echo ", ";
        } else {
            echo "\n";
        }

        $next = $first + $second;
        $first = $second;
        $second = $next;
    }
}

// Call the function with 15 as the argument
printFibonacci(15);
