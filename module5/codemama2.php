<?php
// Input
//$firstName = fgets(STDIN);
//$lastName = fgets(STDIN);

// Input
$firstName = "1";
$lastName = "2";

function formatName($firstName, $lastName)
{
    return $lastName . ', ' . $firstName;
}

// Format the name and print the result
$formattedName = formatName($firstName, $lastName);
echo $formattedName . "\n";
