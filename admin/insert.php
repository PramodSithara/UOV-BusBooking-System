<?php

//tranfer value
session_start(); 
$dash = $_SESSION['dash'];

// Retrieve the value of the message query parameter
$message = $_GET['message'];

// Connect to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uovts";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert the message into a table
$sql = "INSERT INTO notify_booking (uid,Notification) VALUES ('$dash','$message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: booking.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
