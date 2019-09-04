<?php

$pageTitle = "Edit Course Group";

require "init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();
$id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0;
$sql = "SELECT * FROM course_groups WHERE id = {$id}";
$group = select_row($sql);

if(empty($group)) {
    $_SESSION['error'] = "There's No Such <b>Id</b> Or You Trying To Do Something Bad";
    redirect('categories_show.php');
}
$sql2 = "SELECT id ,name FROM courses";
$courses = select_rows($sql2);
$sql3 = "SELECT id ,first_name, last_name FROM users WHERE role_id = 3 ";
$users = select_rows($sql3);

?>



<div class="right-side full-width">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mt-5 mb-5 title">Edit Course Group</h1>
                	<div class="add-new ">
                    <?php view_alerts()?>
                   <div class="form-container col-md-4">
                       
                    <form method="POST" action="__course_group/group_course_edit_process.php">
                        
                        <div class="form-group">
                            <label><b>Group Name</b></label>
                         <input type="text" name="name" placeholder="Group Name" class="form-control" value="<?php echo $group['name']?>">
                        </div>  
                        
                        <div class="form-group">
                         <label><b>Group Will Start On</b></label>
                         <input type="text" name="start" placeholder="Group Start Date" class="form-control" value="<?php echo $group['start_date']?>">
                        </div>
                        
                                                
                        <div class="form-group">
                         <label><b>Group Will End On</b></label>
                         <input type="text" name="end" placeholder="Group End Date" class="form-control" value="<?php echo $group['end_date']?>">
                        </div>
                        
                                                                        
                        <div class="form-group">
                         <label><b>Session Count</b></label>
                         <input type="number" name="count" placeholder="How Many Session" class="form-control" value="<?php echo $group['session_count']?>">
                        </div>
                        
                                                
                                                                        
                        <div class="form-group">
                         <label><b>Max Students</b></label>
                         <input type="number" name="max" placeholder="Max Students" class="form-control" value="<?php echo $group['max_students']?>">
                        </div>

                        
                                                                                                
                                                                        
                        <div class="form-group">
                            <label><b>Courses</b></label>
                            <select name="course" class="form-control">
                                <?php
                                    foreach($courses as $course){
                                        
                                    echo "<option value='{$course['id']}'";
                                            if($group['course_id'] == $course['id'] ){
                                                echo 'selected';
                                            }
                                            echo ">";
                                            echo $course['name'];
                                        echo "</option>";
                                    }
                                ?>
                            </select>
                        </div>
                                                                                              
                        <div class="form-group">
                            <label><b>Instructor</b></label>
                            <select name="ins" class="form-control">
                                <?php
                                    foreach($users as $user){
                                        
                                    echo "<option value='{$user['id']}'";
                                            if($group['user_id'] == $user['id'] ){
                                                echo 'selected';
                                            }
                                            echo ">";
                                            echo $user['first_name'] . $user['last_name'];
                                        echo "</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        
                        
                        <div class="form-group">
                         <input type="hidden"  name="id" value="<?php echo $group['id']?>">
                        </div> 
                       
                      
                    
                        <div class="form-group">
                            <label><b>Status</b> </label>
                            <div class="custom-control custom-radio custom-control-block ml-3">
                              <input type="radio" id="active" name="active" class="custom-control-input" value="1"
                                  <?php
                                        if($group['active'] == 1) { echo "checked";}
                                    ?>
                                >
                              <label class="custom-control-label" for="active">Active</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-block ml-3">
                              <input type="radio" id="deActive" name="active" class="custom-control-input" value="0"
                                  <?php
                                        if($group['active'] == 0) { echo "checked";}
                                    ?>    
                                >
                              <label class="custom-control-label" for="deActive">DeActive</label>
                            </div>
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