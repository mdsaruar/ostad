<?php
$temperature = 25; // Change this value to the current temperature

if ($temperature <= 0) {
    echo "It's freezing!";
} elseif ($temperature > 0 && $temperature <= 15) {
    echo "It's cool.";
} elseif ($temperature > 15) {
    echo "It's warm.";
} else {
    echo "Invalid temperature data.";
}
?>