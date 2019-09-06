<?php

$pageTitle = "Edit Or Tansfer Student";

require "init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();
$id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0;
$sql = "SELECT * FROM course_group_students WHERE id = {$id}";
$student = select_row($sql);


if(empty($student)) {
    $_SESSION['error'] = "There's No Such <b>Id</b> Or You Trying To Do Something Bad";
    redirect('students_course_group_show.php');
}
$sql2 = "SELECT id, name FROM course_groups";
$groups = select_rows($sql2);

?>



<div class="right-side full-width">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mt-5 mb-5 title">Transfer Student</h1>
                	<div class="add-new ">
                    <?php view_alerts()?>
                   <div class="form-container col-md-4">
                       
                    <form method="POST" action="__group_student/student_edit_process.php">
                        


    
                        
                                                                                                
                                                                        
                        <div class="form-group">
                            <label><b>Change Group</b></label>
                            <select name="group" class="form-control">
                                <?php
                                    foreach($groups as $group){
                                        
                                    echo "<option value='{$group['id']}'";
                                            if($student['group_id'] == $group['id'] ){
                                                echo 'selected';
                                            }
                                            echo ">";
                                            echo $group['name'];
                                        echo "</option>";
                                    }
                                ?>
                            </select>
                        </div>
                                                                                              
     
                        
                        
                        <div class="form-group">
                         <input type="hidden"  name="id" value="<?php echo $student['id']?>">
                        </div> 
                                               <div class="form-group">
                         <input type="hidden"  name="student" value="<?php echo $student['student_id']?>">
                        </div> 
                       
                      
                    







                        <input type="submit" name="" value="Update" class="btn btn-success">
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>

</div>



















<?php 

include $tpl . 'footer.php'; 
?>