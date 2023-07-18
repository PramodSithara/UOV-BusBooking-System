<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "uovts";



    //tranfer value
    session_start(); 
    $name = $_SESSION['$vb'];
    
    
$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$vehical = $_POST['bus'];
$purpose = $_POST['purpose'];
$town = $_POST['place'];
$date = $_POST['pick_date'];
$time = $_POST['time'];

$sql = "INSERT INTO booking (uid, vehical, purpose, town, b_date, b_time) VALUES ('$name','$vehical', '$purpose', '$town', '$date', '$time')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>