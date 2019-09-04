<?php

$pageTitle = "";
$noNavbar = "";
$back = "";
require "../init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();



$errors =  validator($_POST,[
   

        'name'       => "required|string|unique:course_groups,name",
        'start'      => 'required|numerice',
        'end'      => 'required|numerice',
        'count'      => 'required|numerice',
        'max'      => 'required|numerice',
        'course'      => 'required|numerice',
        'ins'      => 'required|numerice',
    
]);

if(empty($errors)) {

    $name = $_POST['name'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $active = isset($_POST['active']) && is_numeric($_POST['active']) ? intval($_POST['active']) : 0 ; 
    $count = $_POST['count'];
    $max = $_POST['max'];
    $course = $_POST['course'];
    $ins = $_POST['ins'];

    $sql = "INSERT INTO  course_groups(
                                        name,
                                        start_date,
                                        end_date,
                                        active,
                                        session_count,
                                        max_students,
                                        course_id,
                                        user_id
                                      )
                                VALUES(
                                        '{$name}',
                                        '{$start}',
                                        '{$end}',
                                        '{$active}',
                                        '{$count}',
                                        '{$max}',
                                        '{$course}',
                                        '{$ins}'
                                
                                      )";
    
    $query =  query($sql);
    
    $_SESSION['success'] = 'Congratulation New Course Group His Been <b>Add </b>';
    
    redirect('../group_course_show.php');

}else {
    $_SESSION['errors'] = $errors;
    redirect('back');
  
}
