    <?php

$pageTitle = "";
$back = "";
$noNavbar = "";
require "../init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();

$errors =  validator($_POST,[
   
   'student' => 'required|numeric'
    
    
]);

if(empty($errors)) {
$groupId = $_GET['id'];
$studentId = $_POST['student'];
    
$select = "SELECT * FROM course_group_students WHERE group_id = {$groupId} AND student_id ={$studentId}";
$query = select_rows($select);

    if(empty($query)) {
        
    
        $sql = "INSERT INTO  course_group_students (group_id, student_id) VALUES ({$groupId}, {$studentId})";

        $query =  query($sql);

        $_SESSION['success'] = 'Congratulation New Student  His Been <b> Join Group </b>';

        redirect("back");
    }else {
        $_SESSION['error'] = "Sorry This Student Already In Group";
        redirect('back');
    }
}else {
    $_SESSION['errors'] = $errors;
    redirect('back');
  
}


