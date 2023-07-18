<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "uovts";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$uid = $_POST['id'];
$email = $_POST['email'];
$msg = $_POST['message'];

$sql = "INSERT INTO contact (uid, email, msg) VALUES ('$uid', '$email', '$msg')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  header('Location: ../home.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
