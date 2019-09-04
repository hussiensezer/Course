<?php

$pageTitle = "Edit Course";

require "init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();
$id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0;
$sql = "SELECT * FROM courses WHERE courses.id = {$id}";
$course =  select_row($sql);

$sqltwo =  'SELECT name , id FROM categories';
$cateogries = select_rows($sqltwo);


$sqlthree =  'SELECT first_name, last_name , id FROM users WHERE role_id = 3';
$users = select_rows($sqlthree);




?>



<div class="right-side full-width">

 <div class="container">
        <div class="row">
            <div class="roles col-md-12">
                <h1 class="text-center mt-5 mb-5 title">Edit Course</h1>
                <div class="table-responsive">
                    <?php 
                        view_alerts();
                    ?>
                   <div class="form-container col-md-4">
                    <form method="POST" action="_course/course_edit_process.php">
                        
                        <div class="form-group">
                            <label >Name Course</label>
                         <input type="text" name="name" placeholder="Write Name Course" class="form-control" value="<?php echo $course['name'];?>">
                        </div>   
                        
                         <div class="form-group">
                         <label >Title</label>
                         <input type="text" name="title" placeholder="Write Title Course" class="form-control" value="<?php echo $course['title'];?>">
                        </div>  
                        <div class="form-group">
                            <label >Price</label>
                         <input type="number" name="price" placeholder="Write Price Course" class="form-control" value="<?php echo $course['price'];?>">
                        </div>     
                        <div class="form-group">
                            <label >Duration</label>
                         <input type="number" name="duration" placeholder="Write Duration Course" class="form-control" value="<?php echo $course['duration'];?>">
                        </div>   
                              
                        <div class="form-group">
                            <label >Discount</label>    
                         <input type="number" name="dis" placeholder="Write Discount Course" class="form-control" value="<?php echo $course['discount'];?>">
                        </div>
                        
                           <div class="form-group">
                            <label for="dis_type">Discount Type</label>
                            <select class="form-control" id="dis_type" name='dis_type'>
                              <option disabled selected>Select Discount Type</option>
                                <option value="fixed" 
                                    <?php echo $course['discount_type'] == 'fixed' ?
                                        'selected': '';?>
                                        >Fixed $
                                </option>
                                <option value="present" 
                                        <?php echo $course['discount_type'] == 'present' ?
                                        'selected': '';?>>Persent %</option>
                                
                            </select>
                          </div>  

                         
                        
                         <div class="form-group">
                            <label for="cat">Categories</label>
                            <select class="form-control" id="cat" name='cat'>
                              <option disabled selected>Select The Category</option>
                                <?php 
                                    foreach($cateogries as $cat) {
                                        
                                        echo "<option value='{$cat['id']}'".
                                            ($course['cateogry_id'] == $cat['id'] ? 'selected' : '') .">";
                                            
                                            echo "{$cat['name']}";
                                        
                                        echo "</option>";
                                    }
                                
                                ?>
                            </select>
                          </div>   
                        <div class="form-group">
                            <label for="ins">Instructor</label>
                            <select class="form-control" id="ins" name='ins'>
                               <?php 
                                    foreach($users as $user) {
                                        
                                        echo "<option value='{$user['id']}'".
                                            ($course['instructor_id'] == $user['id'] ? 'selected' : '') .">";
                                            
                                            echo $user['first_name'] . " " . $user['last_name'];
                                        
                                        echo "</option>";
                                    }
                                
                                ?>
                            </select>
                          </div>
                        <div class="form-group">
                            <labe>Description For Course</labe>
                            <textarea name="desc" class="form-control"><?php echo $course['description']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <labe>Requirements For Course</labe>
                            <textarea name="req" class="form-control"><?php echo $course['requirements']?></textarea>
                        </div>
                    
                        <div class="form-group">
                            <label>Status </label>
                            <div class="custom-control custom-radio custom-control-block ml-3">
                              <input type="radio" id="active" name="active" class="custom-control-input" value="1"
                                  <?php
                                       if($course['active'] == 1) { echo "checked";}
                                    ?>
                                >
                              <label class="custom-control-label" for="active">Active</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-block ml-3">
                              <input type="radio" id="deActive" name="active" class="custom-control-input" value="0"
                                  <?php
                                        if($course['active'] == 0) { echo "checked";}
                                    ?>    
                                >
                              <label class="custom-control-label" for="deActive">DeActive</label>
                            </div>
                        </div>
                        <div class="form-group">
                        
                            <input type="file" class="form-control" name="avatar" value="<?php echo $course['avatar'] ?>">
                        </div>



                        <div class="form-group">
                         <input type="hidden"  name="id" value="<?php echo $course['id']?>">
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