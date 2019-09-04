<?php

$pageTitle = "Create Partner";

require "init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();

?>



<div class="right-side full-width">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mt-5 mb-5 title">Create Partner</h1>
                	<div class="add-new edit-role">
                    <?php view_alerts()?>
                   <div class="form-container col-md-4">
                    <form method="POST" action="_partner/partner_create_process.php">
                        <div class="form-group">
                            <label><b>Name</b> </label>
                             <input type="text" name="name" placeholder="name" class="form-control">
                        </div>    
    
                        <div class="form-group">
                         <input type="hidden"  name="id" >
                        </div> 
                       
                        <div class="form-group">
                           <label><b>Avatar</b> </label>
                            <input type="file" name="avatar" class="form-control">
                        </div>
                    
                        <div class="form-group">
                            <label><b>Status </b></label>
                            <div class="custom-control custom-radio custom-control-block ml-3">
                              <input type="radio" id="active" name="active" class="custom-control-input" value="1">
                              <label class="custom-control-label" for="active">Active</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-block ml-3">
                              <input type="radio" id="deActive" name="active" class="custom-control-input" value="0" >
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