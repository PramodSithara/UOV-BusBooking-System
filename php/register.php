<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "uovts";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$name =$_POST['name'];
$status = $_POST['catogary'];
$sex = $_POST['sex'];
$uid = $_POST['status'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "INSERT INTO registration (name, status, sex, uid, password, email, phone) VALUES ('$name', '$status', '$sex', '$uid', '$password', '$email', '$phone')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  header('Location: ../sign.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>


