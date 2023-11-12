<?php
# Write your PHP code from here
$seconds = fgets(STDIN);

//$seconds = 190;

function secondsToHourMinute($seconds)
{
    $hours = round($seconds / 3600);
    $minutes = round(($seconds % 3600) / 60);
    echo "$hours:$minutes\n";
}

// Convert and print in hour:minute format
secondsToHourMinute($seconds);
