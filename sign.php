<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/regstyle.css">

	<style>
		.abs {
  			display: inline-block;
  			padding: 10px 20px;
  			background-color: #4CAF50;
  			color: white;
  			font-size: 16px;
  			text-align: center;
  			border: none;
  			border-radius: 4px;
  			cursor: pointer;
			}
			.abs:hover {
 			 background-color: #3e8e41;
			}

	</style>
</head>
<body>
	<div class="register-box">
		<h2>Login</h2>

		<form id="myForm" action="php/signin.php" method="POST">
			<div class="user-box">
				<input type="text" name="id" required>
				<label>User ID</label>
			</div>
            
                <div id="inputbox-container"></div>
			<div class="user-box">
				<input type="password" name="password" required>
				<label>Password</label>
			</div>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				
			<input class="abs" type="submit" value="Login"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			
				<a href="index.html" class="btn-outline">Go to Home</a>
		</form>
	</div>
</body>
</html>

