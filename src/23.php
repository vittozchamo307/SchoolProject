<?php
// Define variables and constants from db
$server = "localhost";
$username = "root";
$password = "";
$dbname = "schoolproject";

// Create connection
$conn = new mysqli($server, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
