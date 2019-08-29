<?php

require 'kernel.php';

$errors = validator($_POST, [
	'email' => 'required|string|min:10|max:100|email|exists:users,email',
	'password' => 'required|string|min:6|max:50'
]);

if (empty($errors)) {
	
	$sql = "SELECT * FROM users WHERE email = '{$_POST['email']}' AND password = '{$_POST['password']}' LIMIT 1";

	$user = select_row($sql);

	if (empty($user)) {
		$_SESSION['error'] = 'Your password is not valid!';
		redirect('login.php');
	} else {

		$_SESSION['user_id'] = $user['id'];

		$_SESSION['success'] = 'You have logedin successfully!';
		redirect('index.php');
	}
} else {

	$_SESSION['errors'] = $errors;

	redirect('login.php');
}