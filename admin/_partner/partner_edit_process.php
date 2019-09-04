<?php

$pageTitle = "";
$back = "";
$noNavbar = "";
require "../init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();



$errors =  validator($_POST,[
   
        'name'       => "required|string|max:50",
       
    
]);

if(empty($errors)) {
    $name = $_POST['name'];
    $avatar = $_POST['avatar'];
    $id = $_POST['id'];
    $active = isset($_POST['active']) && is_numeric($_POST['active']) ? intval($_POST['active']) : 0 ;
    


    $sql = "UPDATE partners SET name = '{$name}' ,avatar = '{$avatar}' , active = {$active} WHERE id = {$id} LIMIT 1";

    $updated = query($sql);

    $_SESSION['success'] = "Congratulation This Partner Are <b>Updated </b>";
    redirect('back');

}else {
    $_SESSION['errors'] = $errors;
    redirect('back');

}
