<?php

$pageTitle = "Join Student";

require "init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();
// Group id
$id = $_GET['id'];


$sql2 =  "SELECT id, first_name, last_name FROM users WHERE role_id = 2";
$students =  select_rows($sql2);


?>



<div class="right-side full-width">

<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mt-5 mb-5 title">Join Student</h1>
                	<div class="add-new edit-role">
                    <?php view_alerts()?>
                   <div class="form-container col-md-4">
 <form method="POST" action="__group_student/student_create_process.php?id=<?php echo $id ?>">
                  
                       <div class="form-group">
                            <select name="student" class="form-control">
                                <?php
                                    foreach($students as $student){
                                    echo "<option value='{$student['id']}'> ";
                                        echo $student['first_name'] . ' ' . $student['last_name'];
                                    echo "</option>";
                                    }
                                ?>
                           </select>
                        </div>
                      
                    







                        <input type="submit" name="" value="Join" class="btn btn-success">
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