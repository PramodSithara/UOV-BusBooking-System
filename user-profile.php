<?php
include_once 'admin/database.php';
session_start(); 
$name = $_SESSION['$vb'];
$result = mysqli_query($conn,"SELECT * FROM registration where uid='$name'");
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>User Profile</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="css/profile.css">

</head>
<body>
<!-- partial:index.partial.html -->
<form class="form">
	  <h2>User Profile</h2>
	  <div class="form-group">
		  <label for="email">Name:</label>
		  <div class="relative">
			  <input class="form-control" id="name" type="text" value="<?php echo strtoupper($row['name']); ?>" autofocus="" autocomplete="" readonly>
			  <i class="fa fa-user"></i>
		  </div>
	  </div>

	  <div class="form-group">
	  	<label for="email">Reg. ID :</label>
	  	<div class="relative">
	  		<input class="form-control" type="url" pattern="https?://.+" value="<?php echo strtoupper($row['uid']); ?>" readonly>
	  		<i class="fa fa-building"></i>
	  	</div>
	  </div>

	  <div class="form-group">
		<label for="email">Designation:</label>
		<div class="relative">
		<input class="form-control" type="text" id="designation" value="<?php echo strtoupper($row['status']); ?>" readonly>
		<i class="fa fa-suitcase"></i>
	</div>	
	</div>

	<div class="form-group">
			<label for="email">Gender:</label>
	  	<div class="relative">
	  		<input class="form-control" type="text" id="tags" value="<?php echo strtoupper($row['sex']); ?>" readonly>
	  		<i class="fa fa-user"></i>
	  	</div>
	  </div>

	  <div class="form-group">
	  	<label for="email">Email address:</label>
	  	<div class="relative">
		  	<input class="form-control" type="email" value="<?php echo $row['email']; ?>" readonly>
		  	<i class="fa fa-envelope"></i>
	  	</div>
	  </div>

	  <div class="form-group">
	  	<label for="email">Contact Number:</label>
	  	<div class="relative">
	  		<input class="form-control" type="text" maxlength="10" value="<?php echo $row['phone']; ?>" readonly>
	  		<i class="fa fa-phone"></i>
	  	</div>
	  </div>

		

	  <div class="tright">
	  	<button class="movebtn movebtnsu" type="button" onclick="window.location.href='home.php'">Back <i class="fa fa-fw fa-paper-plane"></i></button>
	  </div>
			</form>
