<?php

$pageTitle = "Create User";

require "init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();

$sqltwo =  'SELECT * FROM roles';
$roles = select_rows($sqltwo);

?>



<div class="right-side full-width">

 <div class="container">
        <div class="row">
            <div class="roles col-md-12">
                <h1 class="text-center mt-5 mb-5 title">Create Users</h1>
                <div class="table-responsive">
                    <?php 
                        view_alerts();
                    ?>
                   <div class="form-container col-md-4">
                    <form method="POST" action="_user/user_create_process.php" class="was-validated">
                        
                        <div class="form-group">
                         <input type="text" name="first_name" placeholder="Write Your First Name" class="form-control " required>
                        </div>   
                        
                         <div class="form-group">
                         <input type="text" name="last_name" placeholder="Write Your Last Name" class="form-control" required >
                        </div> 
                        
                        <div class="form-group">
                         <input type="password" name="password" placeholder="Write Your Password" class="form-control" required >
                        </div> 
                                              
                        <div class="form-group">
                         <input type="password" name="password_confirmation" placeholder="Re-Enter Your Password" class="form-control" required >
                        </div> 
                        
                        <div class="form-group">
                         <input type="text" name="email" placeholder="Write Your Email Address" class="form-control" required>
                        </div>  
                        
                        <div class="form-group">
                         <input type="tel" name="phone" placeholder="Write Your Cell Phone" class="form-control" required>
                        </div>   
                              
                        <div class="form-group">
                         <input type="text" name="country" placeholder="Write Your Country" class="form-control" required>
                        </div> 
                        
                        <div class="form-group">
                            <label for="Date">B-Day</label>
                            <input type="date" name="date" class="form-control" id="Date" required>
                        </div>   
                                
                         
                        
                         <div class="form-group" >
                            <select class="custom-select"  name='role' required>
                          
                              <option value="">Select The Role</option>
                                <?php 
                                    foreach($roles as $role) {
                                        
                                        echo "<option value='{$role['id']}' >";
                                            
                                            echo "{$role['name']}";
                                        
                                        echo "</option>";
                                    }
                                
                                ?>
                              
                            </select>
                            <div class="invalid-feedback">This User Will be Admin or Student Or What Ever You Need</div>
                          </div>   
                        <div class="form-group">
                            <label for="Gender">Gender</label>
                            <select class="custom-select" id="Gender" name='gender' required>
                              <option value="">Select The Gender</option>
                              <option value="female" >Female</option>
                              <option value="male">Male</option>
                            </select>
                            <div class="invalid-feedback">The Gender Or User Female Or Male</div>
                          </div>
                    
                        <div class="form-group">
                            <label>Status </label>
                            <div class="custom-control custom-radio custom-control-block ml-3">
                              <input type="radio" id="active" name="active" class="custom-control-input" value="1" required>
                              <label class="custom-control-label" for="active">Active</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-block ml-3">
                              <input type="radio" id="deActive" name="active" class="custom-control-input" value="0" required >
                              <label class="custom-control-label" for="deActive">DeActive</label>
                            </div>
                        </div>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="validatedCustomFile" name="avatar" required>
                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                            <div class="invalid-feedback">Must be JPG,PNG,JEPG,GIF Last Size 2MB</div>
                          </div>

                        <input type="submit" name="" value="Create" class="btn btn-success mt-5">
                        
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