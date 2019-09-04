<?php

$pageTitle = "Create Course Group";

require "init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();
$sql2 = "SELECT id ,name FROM courses";
$courses = select_rows($sql2);
$sql3 = "SELECT id ,first_name, last_name FROM users WHERE role_id = 3 ";
$users = select_rows($sql3);


?>



<div class="right-side full-width">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mt-5 mb-5 title">Create Course Group</h1>
                	<div class="add-new ">
                    <?php view_alerts()?>
                   <div class="form-container col-md-4">
                       
                    <form method="POST" action="__course_group/group_course_create_process.php">
                        
                        <div class="form-group">
                            <label><b>Group Name</b></label>
                         <input type="text" name="name" placeholder="Group Name" class="form-control">
                        </div>  
                        
                        <div class="form-group">
                         <label><b>Group Will Start On</b></label>
                         <input type="date" name="start" placeholder="Group Start Date" class="form-control" >
                        </div>
                        
                                                
                        <div class="form-group">
                         <label><b>Group Will End On</b></label>
                         <input type="date" name="end" placeholder="Group End Date" class="form-control" >
                        </div>
                        
                                                                        
                        <div class="form-group">
                         <label><b>Session Count</b></label>
                         <input type="number" name="count" placeholder="How Many Session" class="form-control" >
                        </div>
                        
                                                
                                                                        
                        <div class="form-group">
                         <label><b>Max Students</b></label>
                         <input type="number" name="max" placeholder="Max Students" class="form-control" >
                        </div>

                        
                                                                                                
                                                                        
                        <div class="form-group">
                            <label><b>Courses</b></label>
                            <select name="course" class="form-control">
                                <option selected disabled>Select Course</option>
                                <?php
                                    foreach($courses as $course){
                                        
                                    echo "<option value='{$course['id']}'>";
                                            echo $course['name'];
                                        echo "</option>";
                                    }
                                ?>
                            </select>
                        </div>
                                                                                              
                        <div class="form-group">
                            <label><b>Instructor</b></label>
                            <select name="ins" class="form-control">
                                <option selected disabled>Select Instructor</option>
                                <?php
                                    foreach($users as $user){
                                        
                                    echo "<option value='{$user['id']}' >";
                                            echo $user['first_name'] . $user['last_name'];
                                        echo "</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        
                        

                       
                      
                    
                        <div class="form-group">
                            <label><b>Status</b> </label>
                            <div class="custom-control custom-radio custom-control-block ml-3">
                              <input type="radio" id="active" name="active" class="custom-control-input" value="1" >
                              <label class="custom-control-label" for="active">Active</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-block ml-3">
                              <input type="radio" id="deActive" name="active" class="custom-control-input" value="0"  >
                              <label class="custom-control-label" for="deActive">DeActive</label>
                            </div>
                        </div>






                        <input type="submit" name="" value="Create" class="btn btn-success">
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