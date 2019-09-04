<?php

$pageTitle = "";
$noNavbar = "";
$back = "";
require "../init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();



$errors =  validator($_POST,[
   
        'name'       => "requried|string|max:50",
        'testi'      => 'required|string',
        'position'   => 'required|string|max:50',
        'avatar'     => 'required|file',
        'active'     => "requried|numeric|in:0,1"
    
]);

if(empty($errors)) {
    $name = $_POST['name'];
    $position = $_POST['position'];
    $testi = $_POST['testi'];
    $avatar = $_POST['avatar'];
    $id = $_SESSION['user']['id'];
    $active = isset($_POST['active']) && is_numeric($_POST['active']) ? intval($_POST['active']) : 0 ;
    
    $sql = "INSERT INTO  testimonials (name,testimonial,position,user_id,avatar ,active) VALUES ('{$name}','{$testi}','{$position}','{$id}','{$avatar}',{$active})";
    
    $query =  query($sql);
    
    $_SESSION['success'] = 'Congratulation New Role His Been <b>Add </b>';
    
    redirect('../testimonials_show.php');

}else {
    $_SESSION['errors'] = $errors;
    redirect('back');
  
}


