<?php

$pageTitle = "Edit User";

require "init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();
$id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0;
$sql = "SELECT users.* , roles.name AS role_name  FROM users INNER JOIN roles ON roles.id = users.role_id WHERE users.id = {$id}";
$user =  select_row($sql);

$sqltwo =  'SELECT * FROM roles';
$roles = select_rows($sqltwo);


?>



<div class="right-side full-width">

 <div class="container">
        <div class="row">
            <div class="roles col-md-12">
                <h1 class="text-center mt-5 mb-5 title">Edit Users</h1>
                <div class="table-responsive">
                    <?php 
                        view_alerts();
                    ?>
                   <div class="form-container col-md-4">
                    <form method="POST" action="_user/user_edit_process.php">
                        
                        <div class="form-group">
                         <input type="text" name="first_name" placeholder="Write Your First Name" class="form-control" value="<?php echo $user['first_name'];?>">
                        </div>   
                        
                         <div class="form-group">
                         <input type="text" name="last_name" placeholder="Write Your Last Name" class="form-control" value="<?php echo $user['last_name'];?>">
                        </div>  
                        <div class="form-group">
                         <input type="text" name="email" placeholder="Write Your Email Address" class="form-control" value="<?php echo $user['email'];?>">
                        </div>     
                        <div class="form-group">
                         <input type="tel" name="phone" placeholder="Write Your Cell Phone" class="form-control" value="<?php echo $user['phone'];?>">
                        </div>   
                              
                        <div class="form-group">
                         <input type="text" name="country" placeholder="Write Your Country" class="form-control" value="<?php echo $user['country'];?>">
                        </div>   
                                
                         
                        
                         <div class="form-group">
                            <label for="Role">Role</label>
                            <select class="form-control" id="Role" name='role'>
                              <option disabled selected>Select The Role</option>
                                <?php 
                                    foreach($roles as $role) {
                                        
                                        echo "<option value='{$role['id']}'". ($user['role_id'] == $role['id'] ? 'selected' : '') .">";
                                            
                                            echo "{$role['name']}";
                                        
                                        echo "</option>";
                                    }
                                
                                ?>
                            </select>
                          </div>   
                        <div class="form-group">
                            <label for="Gender">Gender</label>
                            <select class="form-control" id="Gender" name='gender'>
                              <option disabled selected>Select The Gender</option>
                              <option value="female" <?php if($user['gender'] == 'female') { echo 'selected'; }?> >Female</option>
                              <option value="male" <?php if($user['gender'] == 'male') { echo 'selected'; }?>>Male</option>
                            </select>
                          </div>
                    
                        <div class="form-group">
                            <label>Status </label>
                            <div class="custom-control custom-radio custom-control-block ml-3">
                              <input type="radio" id="active" name="active" class="custom-control-input" value="1"
                                  <?php
                                       if($user['active'] == 1) { echo "checked";}
                                    ?>
                                >
                              <label class="custom-control-label" for="active">Active</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-block ml-3">
                              <input type="radio" id="deActive" name="active" class="custom-control-input" value="0"
                                  <?php
                                        if($user['active'] == 0) { echo "checked";}
                                    ?>    
                                >
                              <label class="custom-control-label" for="deActive">DeActive</label>
                            </div>
                        </div>






                        <div class="form-group">
                         <input type="hidden"  name="id" value="<?php echo $user['id']?>">
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