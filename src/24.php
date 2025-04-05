<?php
// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'school_project');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query the database for all students
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if (!$result) {
    echo "Query failed: " . $conn->error;
} else {
    // Loop through each student in the result set
    while ($row = $result->fetch_assoc()) {
        echo "Name: " . $row['name'] . ", Age: " . $row['age'] . "\n";
    }
}

$conn->close();
?>
