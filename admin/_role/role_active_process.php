<?php
$noNavbar = "";
$back = "";
require "../init.php";
checkguest();
$id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0 ;



$select = "SELECT * FROM roles WHERE id = {$id}";

$role =  select_row($select);

if(!empty($role)){
    
if($role['active'] == 1) {
    $update = updateActive('roles',0, $id);
}else {
    $update = updateActive('roles',1, $id);
  
    
}
    }else {
    $_SESSION['error'] = "There's No Such <b>Id</b> Or You Trying To Do Something Bad";
    redirect("back");
    
}