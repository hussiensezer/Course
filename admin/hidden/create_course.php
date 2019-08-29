<?php
require '../includes/kernel.php';

$categories = select_rows("SELECT * FROM categories");
$instructors = select_rows("SELECT * FROM users WHERE role_id = 2");
?>