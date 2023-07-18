<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM registration");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style1.css">
<title>Manage Customers</title>
<style>
table,th,td{
    border:2px solid black;
    width:1100px;
    background-color:#ccffff;
    text-align:center;
    margin-left: 186px;
    line-height: 2;
    border-radius: 4px;
}





</style>
</head>
<body>
<table>
	<tr>
	<td>Name</td>
	<td>Status</td>
	<td>Gender</td>
	<td>Town</td>
	<td>User ID</td>
	<td>Email</td>
	<td>Phone No</td>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["name"]; ?></td>
	<td><?php echo $row["status"]; ?></td>
	<td><?php echo $row["sex"]; ?></td>
	<td><?php echo $row["town"]; ?></td>
	<td><?php echo $row["uid"]; ?></td>
	<td><?php echo $row["email"]; ?></td>
	<td><?php echo $row["phone"]; ?></td>
	<td><a href="delete-process.php?userid=<?php echo $row["uid"]; ?>">Delete</a></td>
	<input type="text" name="userid">
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</body>
</html>