<?php

require '../includes/kernel.php';

$errors = validator($_GET, [
	'user_id' => 'required|numeric|exists:users,id'
]);

if (empty($errors)) {
	$sql = "DELETE FROM users WHERE id = {$_GET['user_id']}";

	query($sql);

	$_SESSION['success'] = 'User has been deleted successfully!';
	redirect('show_users.php');
} else {
	$_SESSION['errors'] = $errors;
	redirect('show_users.php');
}