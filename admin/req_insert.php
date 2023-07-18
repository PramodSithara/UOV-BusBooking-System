<?php

//tranfer value
session_start(); 
$dash = $_SESSION['dash'];


// Retrieve the value of the message query parameter
$reason = $_POST['reason'];


// Connect to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uovts";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['delete'])) {
    // Delete record from database
    $reason = $_POST['reason'];
    $dash = $_SESSION['dash'];
    $query = "INSERT INTO notify_req (uid, reason) VALUES ('$dash', '$reason')";
    mysqli_query($conn, $query);
    $id = $_POST['id'];
    $query = "DELETE FROM request WHERE id = '$id'";
    mysqli_query($conn, $query);
} else {
    // Insert new reason into database
    $reason = $_POST['reason'];
    $dash = $_SESSION['dash'];
    $query = "INSERT INTO request (uid, reason) VALUES ('$dash', '$reason')";
    mysqli_query($conn, $query);
}

header("Location: ad_req.php");
exit();
?>








