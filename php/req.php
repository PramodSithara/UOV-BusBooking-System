<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "uovts";


    session_start(); 
    $name = $_SESSION['$vb'];


$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$status = $_POST['status'];
$msg = $_POST['reason'];

$sql = "INSERT INTO request (uid, reason) VALUES ('$name', '$msg')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  header('Location: ../home.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>