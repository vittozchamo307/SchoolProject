<?php
// Function to get a random number between two specified numbers
function get_random($min, $max) {
  return rand($min, $max);
}

// Sample usage of the function
$rand = get_random(1, 50);
echo "Random Number: $rand";
?>