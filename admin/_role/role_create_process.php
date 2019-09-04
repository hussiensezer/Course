<?php

$pageTitle = "";
$noNavbar = "";
$back = "";
require "../init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();



$errors =  validator($_POST,[
   
    'name' => 'required|string|min:3|max:50|unique:roles,name',
    'active'     => "requried|numeric|in:0,1"
    
]);

if(empty($errors)) {
    $name = $_POST['name'];
    
    $active = isset($_POST['active']) && is_numeric($_POST['active']) ? intval($_POST['active']) : 0 ;
    
    $sql = "INSERT INTO  roles (name, active) VALUES ('{$name}', {$active})";
    
    $query =  query($sql);
    
    $_SESSION['success'] = 'Congratulation New Role His Been <b>Add </b>';
    
    redirect('../roles_show.php');

}else {
    $_SESSION['errors'] = $errors;
    redirect('back');
  
}






















































