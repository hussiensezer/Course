<!DOCTYPE html>
<html>
<head>
	<title>Register Page</title>
	<style>
		body {
			margin: 0;
			background: #ddd;
		}
		* {
			box-sizing: border-box;
		}
		.form-container {
			padding: 20px;
			margin: 0 auto;
			margin-top: 30px;
			background: #fff;
			max-width: 500px;
			box-shadow: 3px 3px 3px rgba(128, 128, 128, 0.3);
		}
		input {
			width: 100%;
			padding: 5px 10px;
			margin-bottom: 10px;
		}
		input[type="radio"] {
			width: 50%;
		}
	</style>
</head>
<body>

	<div class="form-container">
		<?php
		session_start();
		if (isset($_SESSION['errors'])) {
			print_r($_SESSION['errors']);
			unset($_SESSION['errors']);
		}
		?>

		<form method="POST" action="register_process.php">
			<input type="" name="first_name" placeholder="Firstname">
			<input type="" name="last_name" placeholder="Lastname">
			<input type="" name="email" placeholder="Email">
			<input type="password" name="password" placeholder="Password">
			<input type="password" name="password_confirmation" placeholder="Password Confirmation">
			<input type="radio" name="role_id" value="2">Student
			<input type="radio" name="role_id" value="3">Instructor
			<input type="radio" name="gender" value="male">Male
			<input type="radio" name="gender" value="female">Female
			<input type="date" name="">
			<input type="submit" name="" value="Register">
		</form>
	</div>

</body>
</html>