<?php

$noNavbar = "";
$back = "";
require "../init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $position = $_POST['position'];
    $testi = $_POST['testi'];
    $active = $_POST['active'];
   // $sql = "SELECT name FROM testimonials WHERE id = {$id}";





    $errors = validator($_POST,[
        'id'         => 'required|numeric|exists:testimonials,id',
        'name'       => "requried|string|max:50",
        'testi'      => 'required|string',
        'position'   => 'required|string|max:50',
        'active'     => "requried|numeric|in:0,1"
    ]);


    if(empty($errors)) {

    $sql = "UPDATE testimonials SET name = '{$name}' ,testimonial = '{$testi}', position = '{$position}' , active = {$active} WHERE id = {$id} LIMIT 1";

    $updatetesti = query($sql);
    $_SESSION['success'] = "Congratulation This Testimonial Are <b>Updated </b>";
    redirect('back');

    }else {
        $_SESSION['errors'] = $errors;
        redirect('back');

    }

}else {
   redirect('back');  
}



