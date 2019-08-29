<?php
require 'includes/kernel.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
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
		<?php view_alerts(); ?>

		<form method="POST" action="login_process.php">
			<input type="" name="email" placeholder="Email">
			<input type="password" name="password" placeholder="Password">
			<input type="submit" name="" value="Login">
		</form>
	</div>

</body>
</html>