<?php

$noNavbar = "";
$back = "";
require "../init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();

$id = $_GET['id'];

$sql = "SELECT * FROM course_groups WHERE  id = {$id} LIMIT 1";
$group = select_row($sql);

if(!empty($group)) {
    
    if($group['active'] == 1) {
        $update = updateActive('course_groups', 0 ,$id);
     
    }else {
        $update = updateActive('course_groups',1,$id);
      
    }
    
}else {
    $_SESSION['error'] = "There's No Such <b>Id</b> Or You Trying To Do Something Bad";
    redirect("back");
}
    



