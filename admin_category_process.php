<?php

require 'includes/kernel.php';

middleware_admin();

$errors = validator($_POST, [
	'name' => 'required|string|min:2|max:100',
	'description' => 'required|string|min:2|max:255',
	'active' => 'numeric|in:1'
]);

if (empty($errors)) {
	$name = $_POST['name'];
	$description = $_POST['description'];
	$active = empty($_POST['active']) ? 0 : 1;

	$sql = "INSERT INTO categories (name, description, active, user_id) VALUES('{$name}', '{$description}', '{$active}', {$auth['id']})";

	query($sql);

	$_SESSION['success'] = 'You have created category successfully!';

	redirect('admin_categories.php');
} else {
	$_SESSION['errors'] = $errors;

	redirect('admin_category.php');
}