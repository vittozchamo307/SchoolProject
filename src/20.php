<?php
// Initialize PHP environment
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Database connection parameters
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "schoolproject";

// Create database connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from a table named "students"
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["name"] . "</td>
                <td>" . $row["email"] . "</td>
                </tr>";
    }
    echo "</table>";
} else {
    echo "No data found.";
}

$conn->close();
?>
