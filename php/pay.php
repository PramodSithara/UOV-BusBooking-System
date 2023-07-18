<?php

session_start(); 
$name = $_SESSION['$vb'];

$host = "localhost";
$username = "root";
$password = "";
$database = "uovts";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$receipt = $_POST['no'];
$pic = $_POST['img'];


$sql = "INSERT INTO payment (uid, receipt, slip) VALUES ('$name', '$receipt', '$pic')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  header('Location: ../home.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
