<?php


$pageTitle = "Delete";
$back = "";
$noNavbar = "";
require "../init.php";
// Check If The Vistor Are Login And admin Or Not
checkguest();

$id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0;

$select = "SELECT * FROM partners WHERE id = {$id}";

$partner =  select_row($select);

if(!empty($partner)){
    
$sql = "DELETE FROM partners WHERE id = {$id} ";

$delete = query($sql);
$_SESSION['success'] = "Congratulation This Partner Are <b> Deleted </b> Success";
redirect("back");
}else{
$_SESSION['error'] = "There's No Such <b>Id</b> Or You Trying To Do Something Bad";
redirect("back");
}
