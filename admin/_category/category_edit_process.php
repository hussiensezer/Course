<?php

$noNavbar = "";
$back = "";
require "../init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $active = $_POST['active'];
    $sql = "SELECT name FROM categories WHERE id = {$id}";

    $cat = select_row($sql);
    // This If Condition For Check If The POST['name'] are not Equel the name of role in database do something else check if this exists or not
    if ($cat['name'] != $name ) {
        $condition = '|unique:categories,name';
    }else {
        $condition = '|exists:categories,name';
    }


    $errors = validator($_POST,[
        'id'         => 'required|numeric|exists:categories,id',
        'name'       => "requried|string{$condition}",
        'active'     => "requried|numeric|in:0,1"
    ]);


    if(empty($errors)) {

    $sql = "UPDATE categories SET name = '{$name}' ,description = '{$desc}' ,active = {$active} WHERE id = {$id} LIMIT 1";

    $updateRoles = query($sql);
    $_SESSION['success'] = "Congratulation This User Are <b>Updated </b>";
    redirect('back');

    }else {
        $_SESSION['errors'] = $errors;
        redirect('back');

    }

}else {
   redirect('back');  
}
