<?php

$pageTitle = "Edit Course";

require "init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();

$sqltwo =  'SELECT name , id FROM categories';
$cateogries = select_rows($sqltwo);


$sqlthree =  'SELECT first_name, last_name , id FROM users WHERE role_id = 3';
$users = select_rows($sqlthree);


?>



<div class="right-side full-width">

 <div class="container">
        <div class="row">
            <div class="roles col-md-12">
                <h1 class="text-center mt-5 mb-5 title">Create Course</h1>
                <div class="table-responsive">
                    <?php 
                        view_alerts();
                    ?>
                   <div class="form-container col-md-4">
                    <form method="POST" action="_course/course_create_process.php">
                        
                        <div class="form-group">
                            <label >Name Course</label>
                         <input type="text" name="name" placeholder="Write Name Course" class="form-control" >
                        </div>   
                        
                         <div class="form-group">
                         <label >Title</label>
                         <input type="text" name="title" placeholder="Write Title Course" class="form-control" >
                        </div>  
                        <div class="form-group">
                            <label >Price</label>
                         <input type="number" name="price" placeholder="Write Price Course" class="form-control" >
                        </div>     
                        <div class="form-group">
                            <label >Duration</label>
                         <input type="number" name="duration" placeholder="Write Duration Course" class="form-control" >
                        </div>   
                              
                        <div class="form-group">
                            <label >Discount</label>    
                         <input type="number" name="dis" placeholder="Write Discount Course" class="form-control">
                        </div>
                        
                           <div class="form-group">
                            <label for="dis_type">Discount Type</label>
                            <select class="form-control" id="dis_type" name='dis_type'>
                              <option disabled selected>Select Discount Type</option>
                                <option value="fixed">Fixed $</option>
                                <option value="present" >Persent %</option>
                                
                            </select>
                          </div>  

                         
                        
                         <div class="form-group">
                            <label for="cat">Categories</label>
                            <select class="form-control" id="cat" name='cat'>
                              <option disabled selected>Select The Category</option>
                                <?php 
                                    foreach($cateogries as $cat) {
                                        
                                        echo "<option value='{$cat['id']}'>";

                                            
                                            echo "{$cat['name']}";
                                        
                                        echo "</option>";
                                    }
                                
                                ?>
                            </select>
                          </div>   
                        <div class="form-group">
                            <label for="ins">Instructor</label>
                            <select class="form-control" id="ins" name='ins'>
                                  <option disabled selected>Select The Instructor</option>
                               <?php 
                                    foreach($users as $user) {
                                        
                                        echo "<option value='{$user['id']}'>";

                                            
                                            echo $user['first_name'] . " " . $user['last_name'];
                                        
                                        echo "</option>";
                                    }
                                
                                ?>
                            </select>
                          </div>
                        <div class="form-group">
                            <labe>Description For Course</labe>
                            <textarea name="desc" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <labe>Requirements For Course</labe>
                            <textarea name="req" class="form-control"></textarea>
                        </div>
                    
                        <div class="form-group">
                            <label>Status </label>
                            <div class="custom-control custom-radio custom-control-block ml-3">
                              <input type="radio" id="active" name="active" class="custom-control-input" value="1" >
                              <label class="custom-control-label" for="active">Active</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-block ml-3">
                              <input type="radio" id="deActive" name="active" class="custom-control-input" value="0">
                              <label class="custom-control-label" for="deActive">DeActive</label>
                            </div>
                        </div>
                        <div class="form-group">
                        
                            <input type="file" class="form-control" name="avatar">
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