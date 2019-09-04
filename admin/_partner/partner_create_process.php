<?php

$pageTitle = "";
$back = "";
$noNavbar = "";
require "../init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();

$errors =  validator($_POST,[
   
      'name'       => "required|string|max:50",
        'active'     => "required|numeric|in:0,1",
        'avatar'    => 'required|file'
    
]);

if(empty($errors)) {
    $name = $_POST['name'];
    $id = $_SESSION['user']['id'];
    $avatar = $_POST['avatar'];
    $active = isset($_POST['active']) && is_numeric($_POST['active']) ? intval($_POST['active']) : 0 ;
    
    $sql = "INSERT INTO  partners (name,user_id,avatar ,active) VALUES ('{$name}','{$id}','{$avatar}',{$active})";
    
    $query =  query($sql);
    
    $_SESSION['success'] = 'Congratulation New Partner His Been <b>Add </b>';
    
    redirect('../partners_show.php');

}else {
    $_SESSION['errors'] = $errors;
    redirect('back');
  
}


