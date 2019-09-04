<?php

$pageTitle = "";
$back = "";
$noNavbar = "";
require "../init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    

$id              = $_POST['id'];
$name            = $_POST['name'];
$title           = $_POST['title'];
$desc            = $_POST['desc'];
$req             = $_POST['req'];
$avatar          = $_POST['avatar'];
$price           = $_POST['price'];
$duration        = $_POST['duration'];
$discont         = $_POST['dis'];
$active          = $_POST['active'];
$dis_type        = $_POST['dis_type'];
$cat             = $_POST['cat'];
$ins             = $_POST['ins'];

$sql = "SELECT * FROM courses WHERE id = {$id} LIMIT 1";

$course = select_row($sql);


if($course['name'] != $name) {
     $condition = '|unique:courses,name';
    }else {
        $condition = '|exists:courses,name';

    }


    $errors = validator($_POST,[
        'id'               => 'required|numeric|exists:courses,id',
        'name'             => "requried|string|max:255{$condition}",
        'title'             => "requried|string|max:255",
        'desc'             => "requried|string",
        'avatar'           => "requried|file",
        'price'           => "requried|numeric",
        'duration'           => "requried|numeric",
        'cat'               => 'required|numerice',
        'ins'               => 'required|numerice',
        'active'           => "requried|numeric|in:0,1",
        
        
    ]);

if(empty($errors)) {
    $sql = "UPDATE courses SET 
                            name = '{$name}',
                            title = '{$title}',
                            description = '{$desc}',
                            requirements = '{$req}',
                            avatar = '{$avatar}',
                            duration = '{$duration}',
                            discount = '{$discont}',
                            active = '{$active}',
                            discount_type = '{$dis_type}',
                            cateogry_id = '{$cat}',
                            instructor_id = '{$ins}'

                        WHERE
                            id         = {$id}
                            ";
    $update = query($sql);
        $_SESSION['success'] = 'Congratualation This Course Data Are <b>Updated</b>';
       redirect('back');
    }else {
        $_SESSION['errors'] = $errors;
        redirect('back');
    }
}else {
    redirect('back');
}