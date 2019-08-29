<?php

require '../includes/kernel.php';

$errors = validator($_POST, [
	'first_name' => 'required|string|min:2|max:50',
	'last_name' => 'required|string|min:2|max:50',
	'email' => 'required|string|min:6|max:100|email|unique:users,email',
	'password' => 'required|string|min:6|max:50|confirmed',
	'role_id' => 'required|numeric|exists:roles,id',
	// 'avatar' => 'required|file|image',
]);

if (empty($errors)) {
	$sql = "INSERT INTO users (first_name, last_name, email, password, role_id, avatar) VALUES('{$_POST['first_name']}', '{$_POST['last_name']}', '{$_POST['email']}', '{$_POST['password']}', '{$_POST['role_id']}', 'https://via.placeholder.com/150')";

	query($sql);

	$_SESSION['success'] = 'New user has been created successfully!';
	redirect('create_user.php');
} else {
	$_SESSION['errors'] = $errors;
	redirect('create_user.php');
}