<?php

$pageTitle = "";
$back = "";
$noNavbar = "";
require "../init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    


$first      = $_POST['first_name'];
$last       = $_POST['last_name'];
$email      = $_POST['email'];
$pass       = $_POST['password'];
$role       = $_POST['role'];
$active     = $_POST['active'];
$phone      = $_POST['phone'];
$country    = $_POST['country'];
$gender     = $_POST['gender'];
$bday       = $_POST['date'];  
$avatar     = $_POST['avatar'];



    $errors = validator($_POST,[
        'first_name'       => "requried|string|min:3|max:50",
        'password'         => 'requried|min:6|max:50|confirmation',
        'last_name '       => "requried|string|min:3|max:50",
        'active'           => "requried|numeric|in:0,1",
        'email'            => "requried|email|unique:users,email",
        'avatar'           => 'required|file'
        
    ]);

if(empty($errors)) {
    $sql = "INSERT INTO users 
                            (first_name, last_name, email, password, role_id, active, phone, country, gender, age, avatar)
                        VALUES
                            ('{$first}','{$last}','{$email}','{$pass}','{$role}','{$active}','{$phone}','{$country}','{$gender}','{$bday}','{$avatar}')";

        $insert = query($sql);
        $_SESSION['success'] = 'Congratualation This User  Are <b>Created</b>';
       redirect('../users_show.php');
    }else {
        $_SESSION['errors'] = $errors;
        redirect('back');
    }
}else {
    redirect('back');
}