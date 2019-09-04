<?php

$pageTitle = "";
$noNavbar = "";
$back = "";
require "../init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    

$id         = $_POST['id'];
$first      = $_POST['first_name'];
$last       = $_POST['last_name'];
$email      = $_POST['email'];
$phone      = $_POST['phone'];
$country    = $_POST['country'];
$role       = $_POST['role'];
$gender     = $_POST['gender'];
$active     = $_POST['active'];


$sql = "SELECT * FROM users WHERE id = {$id} LIMIT 1";

$user = select_row($sql);


if($user['email'] != $email) {
     $condition = '|unique:users,email';
    }else {
        $condition = '|exists:users,email';

    }


    $errors = validator($_POST,[
        'id'               => 'required|numeric|exists:users,id',
        'first_name'       => "requried|string|min:3|max:50",
        'last_name '       => "requried|string|min:3|max:50",
        'active'           => "requried|numeric|in:0,1",
        'email'            => "required|email{$condition}",
        
    ]);

if(empty($errors)) {
    $sql = "UPDATE users SET 
                            first_name = '{$first}',
                            last_name  = '{$last}',
                            email      = '{$email}',
                            phone      = '{$phone}',
                            country    = '{$country}',
                            role_id    = '{$role}',
                            gender     = '{$gender}',
                            active     = '{$active}'
                        WHERE
                            id         = {$id}
                            ";
    $update = query($sql);
        $_SESSION['success'] = 'Congratualation This User Data Are <b>Updated</b>';
       redirect('back');
    }else {
        $_SESSION['errors'] = $errors;
        redirect('back');
    }
}else {
    redirect('back');
}