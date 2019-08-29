<?php

require 'includes/kernel.php';

$errors = validator($_POST, [
	'name' => 'required|string|min:2|max:50',
	'position' => 'required|string|min:2|max:50',
	'testimonial' => 'required|string|min:2|max:50000',
	'active' => 'numeric|in:1'
]);

if (empty($errors)) {

	$name = $_POST['name'];
	$position = $_POST['position'];
	$testimonial = str_replace("'", "\'", $_POST['testimonial']);
	$active = empty($_POST['active']) ? 0 : 1;
	$avatar = 'avatar';

	$sql = "INSERT INTO testimonials (name, position, testimonial, active, user_id, avatar) VALUES('{$name}', '{$position}', '{$testimonial}', '{$active}', {$auth['id']}, '{$avatar}')";

	query($sql);

	$_SESSION['success'] = 'You have created testimonial successfully!';

	redirect('admin_testimonials.php');
} else {
	$_SESSION['errors'] = $errors;

	redirect('admin_testimonial.php');
}