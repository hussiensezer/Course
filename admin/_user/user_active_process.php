<?php

$pageTitle = "";
$noNavbar = "";
$back = "";
require "../init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();

$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE  id = {$id} LIMIT 1";
$user = select_row($sql);





if(!empty($user)) {
    
    if($user['active'] == 1) {
  
       $update = updateActive('users', 0 ,$id);

    }else {
        
        
       
        $update = updateActive('users',1,$id);
      
    }
    
}else {
    $_SESSION['error'] = "There's No Such <b>Id</b> Or You Trying To Do Something Bad";
    redirect("back");
}
    



