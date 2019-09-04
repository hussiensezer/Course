


<?php

$noNavbar = "";
$back = "";
require "../init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $count = $_POST['count'];
    $max = $_POST['max'];
    $course = $_POST['course'];
    $ins = $_POST['ins'];
    $active = isset($_POST['active']) && is_numeric($_POST['active']) ? intval($_POST['active']) : 0 ;     $sql = "SELECT name FROM course_groups WHERE id = {$id}";

    $group = select_row($sql);
    // This If Condition For Check If The POST['name'] are not Equel the name of role in database do something else check if this exists or not
    if ($group['name'] != $name ) {
        $condition = '|unique:course_groups,name';
    }else {
        $condition = '|exists:course_groups,name';
    }


    $errors = validator($_POST,[
        'id'         => 'required|numeric|exists:course_groups,id',
        'name'       => "required|string{$condition}",
        'start'      => 'required|numerice',
        'end'      => 'required|numerice',
        'count'      => 'required|numerice',
        'max'      => 'required|numerice',
        'course'      => 'required|numerice',
        'ins'      => 'required|numerice',
    ]);


    if(empty($errors)) {

    $sql = "UPDATE course_groups SET 
                                    name = '{$name}',
                                    start_date = '{$start}',
                                    end_date = '{$end}',
                                    session_count = '{$count}',
                                    max_students = '{$max}',
                                    course_id = '{$course}',
                                    user_id = '{$ins}',
                                    
                                    active = {$active} WHERE id = {$id} LIMIT 1";
    $update = query($sql);
    $_SESSION['success'] = "Congratulation This Group Course Are <b>Updated </b>";
    redirect('back');

    }else {
        $_SESSION['errors'] = $errors;
        redirect('back');

    }

}else {
   redirect('back');  
}



