<?php

$pageTitle = "";
$noNavbar = "";
$back = "";
require "../init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();

$id = $_GET['id'];

$sql = "SELECT * FROM partners WHERE  id = {$id} LIMIT 1";
$partner = select_row($sql);

if(!empty($partner)) {
    
    if($partner['active'] == 1) {
        $update = updateActive('partners', 0 ,$id);
     
    }else {
        $update = updateActive('partners',1,$id);
      
    }
    
}else {
    $_SESSION['error'] = "There's No Such <b>Id</b> Or You Trying To Do Something Bad";
    redirect("back");
}
    