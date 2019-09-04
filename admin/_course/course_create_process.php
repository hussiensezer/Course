<?php

$pageTitle = "";
$back = "";
$noNavbar = "";
require "../init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    

$name            = $_POST['name'];
$title           = $_POST['title'];
$desc            = $_POST['desc'];
$req             = $_POST['req'];
$avatar          = $_POST['avatar'];
$price           = $_POST['price'];
$duration        = $_POST['duration'];
$discont         = $_POST['dis'];
@$active          = $_POST['active'];
@$dis_type        = $_POST['dis_type'];
@$cat             = $_POST['cat'];
@$ins             = $_POST['ins'];
$id              = $_SESSION['user']['id'];




    $errors = validator($_POST,[
        'name'             => "requried|string|max:255|unique:courses,name",
        'title'             => "requried|string|max:255",
        'desc'             => "requried|string",
        'avatar'            => "requried|file",
        'price'             => "requried|numeric",
        'duration'           => "requried|numeric",
        'cat'               => 'required|numerice',
        'ins'               => 'required|numerice',
        'active'           => "requried|numeric|in:0,1",
        
        
    ]);

if(empty($errors)) {
    $sql ="INSERT INTO courses (
                                name,
                                title,
                                description,
                                requirements,
                                avatar,
                                price,
                                duration,
                                discount,
                                active,
                                discount_type,
                                cateogry_id,
                                instructor_id,
                                user_id
                                )
                        VALUES(
                                '{$name}',
                                '{$title}',
                                '{$desc}',
                                '{$req}',
                                '{$avatar}',
                                '{$price}',
                                '{$duration}',
                                '{$discont}',
                                '{$active}',
                                '{$dis_type}',
                                '{$cat}',
                                '{$ins}',
                                '{$id}'
                              )
                        ";
    


    $insert = query($sql);
        $_SESSION['success'] = 'Congratualation This Course  Are <b>Created</b>';
       redirect('../courses_show.php');
    }else {
        $_SESSION['errors'] = $errors;
        redirect('back');
    }
}else {
    redirect('back');
}