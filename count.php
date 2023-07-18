<?php

session_start(); 
$name = $_SESSION['$vb'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uovts";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the count of records from the table
$sql = "SELECT (SELECT COUNT(*) FROM notify_req WHERE 'uid'==$name) + (SELECT COUNT(*) FROM notify_booking WHERE 'uid'==$name) as count";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output the count as a JSON object
    $row = $result->fetch_assoc();
    echo json_encode($row);
} else {
    echo "0";
}

$conn->close();
?>
