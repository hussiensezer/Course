<?php

$pageTitle = "";
$back = "";
$noNavbar = "";
require "../init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();

$id = $_GET['id'];

$sql = "SELECT * FROM testimonials WHERE  id = {$id} LIMIT 1";
$testi = select_row($sql);

if(!empty($testi)) {
    
    if($testi['active'] == 1) {
        $update = updateActive('testimonials', 0 ,$id);
     
    }else {
        $update = updateActive('testimonials',1,$id);
      
    }
    
}else {
    $_SESSION['error'] = "There's No Such <b>Id</b> Or You Trying To Do Something Bad";
    redirect("back");
}
    



