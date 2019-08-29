<?php

require '../includes/kernel.php';

$errors = validator($_POST, [
	'id' => 'required|numeric|exists:users,id',
	'first_name' => 'required|string|min:2|max:50',
	'last_name' => 'required|string|min:2|max:50',
	'role_id' => 'required|numeric|exists:roles,id',
	// 'avatar' => 'required|file|image',
]);

if (empty($errors)) {
	# code...
	$sql = "UPDATE users SET first_name = '{$_POST['first_name']}', last_name = '{$_POST['last_name']}', role_id = {$_POST['role_id']} WHERE id = {$_POST['id']}";

	query($sql);

	$_SESSION['success'] = 'User data has been updated successfully!';
	redirect("edit_user.php?user_id={$_POST['id']}");
} else {
	$_SESSION['errors'] = $errors;
	redirect("edit_user.php?user_id={$_POST['id']}");
}
