<?php

session_start();

require 'validator.php';

$errors = validator($_POST, [
	'first_name' => 'required|string|min:2|max:50',
	'last_name' => 'required|string|min:2|max:50',
	'email' => 'required|string|min:10|max:100|email',
	'password' => 'required|string|min:6|max:50|confirmed',
	'role_id' => 'required|numeric|in:2,3',
	'gender' => 'required|string|in:male,female',
]);

if (empty($errors)) {
	
	$connection = mysqli_connect('localhost', 'root', '', 'courses_hub');

	$sql = "INSERT INTO users (first_name, last_name, email, password, role_id, gender) VALUE ('{$_POST['first_name']}', '{$_POST['last_name']}', '{$_POST['email']}', '{$_POST['password']}', '{$_POST['role_id']}',  '{$_POST['gender']}')";

	$query = mysqli_query($connection, $sql);

	$_SESSION['success'] = 'You have registered successfully, please login!';

	header('Location: login.php');
} else {

	$_SESSION['errors'] = $errors;

	header('Location: register.php');
}