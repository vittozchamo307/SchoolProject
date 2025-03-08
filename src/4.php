<?php
// Function to generate a random number between 1 and 100
function getRandomNumber() {
  return rand(1, 100);
}

// Function to check if a number is even or odd
function isEven($number) {
  return $number % 2 == 0;
}

// Main function to solve the problem
function solveProblem() {
  // Generate two random numbers between 1 and 100
  $num1 = getRandomNumber();
  $num2 = getRandomNumber();

  // Check if either number is even or odd
  if (isEven($num1) || isEven($num2)) {
    return 'The numbers are both even';
  } else {
    return 'The numbers are both odd';
  }
}

// Call the main function to solve the problem
echo solveProblem();
