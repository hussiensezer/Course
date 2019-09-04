<?php

$pageTitle = "";
$noNavbar = "";
$back = "";
require "../init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();

$id = $_GET['id'];

$sql = "SELECT * FROM courses WHERE  id = {$id} LIMIT 1";
$course = select_row($sql);

if(!empty($course)) {
    
    if($course['active'] == 1) {
        $update = updateActive('courses', 0 ,$id);
     
    }else {
        $course = updateActive('courses',1,$id);
      
    }
    
}else {
    $_SESSION['error'] = "There's No Such <b>Id</b> Or You Trying To Do Something Bad";
    redirect("back");
}
    



