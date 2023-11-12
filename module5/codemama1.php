<?php
// Input
//$a = fgets(STDIN);
//$b = fgets(STDIN);

$a = 10;
$b = 10;

function sum_10($a, $b)
{
    return $a === 10 || $b === 10 || ($a + $b) === 10;
}

// Check if the condition is met and print the result
if (sum_10($a, $b)) {
    echo "True\n";
} else {
    echo "False\n";
}
