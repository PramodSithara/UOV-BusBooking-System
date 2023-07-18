<?php
 session_start(); 
 $name = $_SESSION['$vb'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Request</title>
	<link rel="stylesheet" type="text/css" href="css/regstyle.css">
</head>
<body>
	<div class="register-box">
		<h2>Request For Special Transport</h2>

		<form id="myForm" action="php/req.php" method="POST">
			<div class="user-box">
			<input class="form-control" type="url" pattern="https?://.+" value="<?php echo strtoupper($name) ?>" readonly>
			</div>
            
            <div id="inputbox-container"></div>
			<div class="user-box">
                <textarea name="reason" cols="6" required></textarea>
			</div>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				
			<input class="abs" type="submit" value="Send"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

				<a href="home.php" class="btn-outline">Go to Home</a>
		</form>
	</div>
</body>
</html>

<script>
    function addInputBox() {
      var selectbox = document.getElementById("selectbox");
      var inputboxContainer = document.getElementById("inputbox-container");
      var selectedOption = selectbox.options[selectbox.selectedIndex].value;

      if (selectedOption === "") {
        inputboxContainer.innerHTML = "";
      } else {
        var inputbox = document.createElement("input");
        inputbox.type = selectedOption;
        inputbox.name = "status";
        inputbox.placeholder = "Enter " + selectedOption + " ID";
		inputbox.required = "Enter";

        inputboxContainer.innerHTML = "";
        inputboxContainer.appendChild(inputbox);
      }
    }
</script>