<?php

$pageTitle = "";
$noNavbar = "";
$back = "";
require "../init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();

$id = $_GET['id'];

$sql = "SELECT * FROM categories WHERE  id = {$id} LIMIT 1";
$cat = select_row($sql);

if(!empty($cat)) {
    
    if($cat['active'] == 1) {
        $update = updateActive('categories', 0 ,$id);
     
    }else {
        $update = updateActive('categories',1,$id);
      
    }
    
}else {
    $_SESSION['error'] = "There's No Such <b>Id</b> Or You Trying To Do Something Bad";
    redirect("back");
}
    



