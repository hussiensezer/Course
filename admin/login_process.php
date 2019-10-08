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
    $sql = "SELECT * FROM  users WHERE email = '{$email}' AND role_id = 1 LIMIT 1";
    $user =  select_row($sql);
    
    if(!empty($user)){
    if(password_verify($pass, $user['password'])) {
        $_SESSION['success'] = "Congratulation Login Success";
        $_SESSION['user'] = $user;
        redirect('adminboard.php');
    }else {
        $_SESSION['error'] = "Wrong Password Please Try Again";
      // echo password_hash(123456, PASSWORD_DEFAULT);
        redirect('login.php');  
    }
    }else {
        $_SESSION['error'] = "Wrong Email Sorry You don't Have The Access To Join Here";
        redirect('login.php');
        
    }
}
    

    
    
    
 