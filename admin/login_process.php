<?php



$noNavbar = "";
require "init.php";

$errors = validator($_POST,[
	'email' => 'required|string|min:10|max:100|email|exists:users,email',
    'pass' => 'required|string|min:6|max:50'
]);


if(!empty($errors)) {
    
    $_SESSION['errors'] = $errors;
    redirect('login.php');
}else {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $sql = "SELECT * FROM  users WHERE email = '{$email}' AND password = {$pass} LIMIT 1";
    $user =  select_row($sql);
    
    
    if(!empty($user)) {
       if($user['role_id'] == 1) {
            $_SESSION['user'] = $user;
        redirect('adminboard.php');
       }else {
           $_SESSION['normalUser'] = $user;
           redirect("../index.php");
       }
    }else {
        $_SESSION['error'] = "Your <b>Password</b> is Wrong Or You Don't Have The <b>Access</b> To Login";
        redirect('login.php');
    }
}