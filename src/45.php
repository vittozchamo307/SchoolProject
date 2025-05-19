<?php
// Initialize PHP session variables
session_start();

// Check if user has been logged in previously
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === 1) {
    echo "You are already logged in. Please visit the next page.";
} else {
    // Redirect to login page or log in function based on session status
    header("Location: https://www.example.com/login");
}
?>
