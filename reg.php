<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="css/regstyle.css">
</head>
<body>
	<div class="register-box">
		<h2>Register</h2>

		<form id="myForm" action="php/register.php" method="POST" onsubmit="return validateForm();">
			<div class="user-box">
				<input type="text" name="name" required>
				<label>Name with initials</label>
			</div>
            <div class="user-box">
				<select id="selectbox" name="catogary" onchange="addInputBox()" required>
                    <option value="" disabled selected>Select Who are you</option>
					<option value="Student" class="black_color">Student</option>
					<option value="Academic" class="black_color">Academic Member</option>
					<option value="Non-Academic" class="black_color">Non-Academic Member</option>
				</select>
                <div id="inputbox-container"></div>

			<div class="user-box">
				<select id="selectbox" name="sex" required>
					<option value="" disabled selected>Select Gender</option>
					<option value="Male" class="black_color">Male</option>
					<option value="Female" class="black_color">Female</option>
				</select>
			</div>
			<div class="user-box">
				<input type="password" id="password" name="password" required>
				<label>Password</label>
			</div>
            
			<div class="user-box">
				<input type="password" id="confirm-password" required>
				<label>Confirm Password</label>
			</div>
			<div class="user-box">
				<input type="email" name="email" required>
				<label>Email</label>
			</div>
			<div class="user-box">
				<input type="tel" name="phone" required>
				<label>Phone</label>
			</div>
				<span></span>
				<span></span>
				<span></span>
			<input class="abs" type="submit">
		</form>
	</div>
</body>
</html>

<!--Java Script-->

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

	function validatePassword() {
			var password = document.getElementById("password").value;
			var password_confirm = document.getElementById("confirm-password").value;

			if (password != password_confirm) {
				alert("Passwords did Not match");
				return false;
			}

			return true;
		}

		function validatePasswordlen() {
			var password = document.getElementById("password").value;

			if (password.length < 8) {
				alert("Password must be at least 8 characters long");
				return false;
			}

			return true;
		}

		function validateForm() {
			var isValidpass = validatePassword();
			var isValidpasslen = validatePasswordlen();
			return isValidpass && isValidpasslen;
		}
</script>

