<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "urloot";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO professor (professorName)
VALUES ('Benjala Melami')";

if ($conn->query($sql) === TRUE) {
    echo "algo";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
