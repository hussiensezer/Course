<?php

$pageTitle = "";
$noNavbar = "";
$back = "";
require "../init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();

$id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0;
$select = "SELECT * FROM users WHERE id = {$id}";

$user =  select_row($select);

if(!empty($user)) {
    deleteRow('users',$id, 'back');
}else {
$_SESSION['error'] = "There's No Such <b>Id</b> Or You Trying To Do Something Bad";
redirect("back");
}