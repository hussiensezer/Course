<?php

$noNavbar = "";
$back = "";
require "../init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $studentId = $_POST['student'];
    $group = $_POST['group'];

    $errors = validator($_POST,[
        'group'    => 'required|numeric',
        'id'       => 'required|numeric'
    

    ]);


    if(empty($errors)) {
        
            
        $select = "SELECT * FROM course_group_students WHERE group_id = {$group} AND student_id = {$studentId}";
        // To Check If This student There in The Other Group Or Not If There so we can't Transfer 
        // If Not There We Must Transfer If He Need
        $query = select_rows($select);
 
        
    if(empty($query)){
       $sql = "UPDATE course_group_students SET group_id = '{$group}' WHERE id = {$id} LIMIT 1";
        $updateGroup = query($sql);
        $_SESSION['success'] = "Congratulation This Student Has Been Are <b>Transfer </b>";
        redirect('back'); 

    }else {
        $_SESSION['error'] = 'This Student Already There You Can\'t Transfer It Again';
        redirect('back');
    }



    }else {
     $_SESSION['errors'] = $errors;
        redirect('back');

    }

}else {
   redirect('back');  
}



