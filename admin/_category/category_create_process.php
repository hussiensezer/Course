<?php

$pageTitle = "";
$noNavbar = "";
$back = "";
require "../init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();



$errors =  validator($_POST,[
   
    'name' => 'required|string|min:3|max:50|unique:categories,name',
    'desc' => 'required|string|min:3|max:255',
    'active'     => "requried|numeric|in:0,1"
    
]);

if(empty($errors)) {
    $name = $_POST['name'];
    
    $active = isset($_POST['active']) && is_numeric($_POST['active']) ? intval($_POST['active']) : 0 ;
    $desc = $_POST['desc'];
    $id = $_SESSION['user']['id'];
    
    $sql = "INSERT INTO  categories (name, description,active, user_id) VALUES ('{$name}',' {$desc}',{$active} , {$id})";
    
    $query =  query($sql);
    
    $_SESSION['success'] = 'Congratulation New Category His Been <b>Add </b>';
    
    redirect('../categories_show.php');

}else {
    $_SESSION['errors'] = $errors;
    redirect('back');
  
}
