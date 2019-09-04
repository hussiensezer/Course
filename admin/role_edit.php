<?php

$pageTitle = "Edit Role";

require "init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();
$id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0;
$sql = "SELECT * FROM roles WHERE id = {$id}";
$role = select_row($sql);

if(empty($role)) {
    $_SESSION['error'] = "There's No Such <b>Id</b> Or You Trying To Do Something Bad";
    redirect('roles_show.php');
}
?>



<div class="right-side full-width">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mt-5 mb-5 title">Edit Role</h1>
                	<div class="add-new edit-role">
                    <?php view_alerts()?>
                   <div class="form-container col-md-4">
                    <form method="POST" action="_role/role_edit_process.php">
                        <div class="form-group">
                         <input type="text" name="name" placeholder="Role Name" class="form-control" value="<?php echo $role['name']?>">
                        </div>   
                        <div class="form-group">
                         <input type="hidden"  name="id" value="<?php echo $role['id']?>">
                        </div> 
                       
                      
                    
                        <div class="form-group">
                            <label>Status </label>
                            <div class="custom-control custom-radio custom-control-block ml-3">
                              <input type="radio" id="active" name="active" class="custom-control-input" value="1"
                                  <?php
                                        if($role['active'] == 1) { echo "checked";}
                                    ?>
                                >
                              <label class="custom-control-label" for="active">Active</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-block ml-3">
                              <input type="radio" id="deActive" name="active" class="custom-control-input" value="0"
                                  <?php
                                        if($role['active'] == 0) { echo "checked";}
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