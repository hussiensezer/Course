<?php

$pageTitle = "";
$noNavbar = "";
$back = "";
require "../init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();

$id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0;
$select = "SELECT * FROM categories WHERE id = {$id}";

$cat =  select_row($select);

if(!empty($cat)) {
    deleteRow('categories',$id, 'back');
}else {
$_SESSION['error'] = "There's No Such <b>Id</b> Or You Trying To Do Something Bad";
redirect("back");
}