<?php

$pageTitle = "Edit Role";

require "init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();
$id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0;
$sql = "SELECT * FROM categories WHERE id = {$id}";
$cat = select_row($sql);

if(empty($cat)) {
    $_SESSION['error'] = "There's No Such <b>Id</b> Or You Trying To Do Something Bad";
    redirect('categories_show.php');
}
?>



<div class="right-side full-width">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mt-5 mb-5 title">Edit Category</h1>
                	<div class="add-new ">
                    <?php view_alerts()?>
                   <div class="form-container col-md-4">
                    <form method="POST" action="_category/category_edit_process.php">
                        <div class="form-group">
                         <input type="text" name="name" placeholder="Category Name" class="form-control" value="<?php echo $cat['name']?>">
                        </div>   
                        <div class="form-group">
                         <input type="text" name="desc" placeholder="Category Descripiton" class="form-control" value="<?php echo $cat['description']?>">
                        </div>   
                        <div class="form-group">
                         <input type="hidden"  name="id" value="<?php echo $cat['id']?>">
                        </div> 
                       
                      
                    
                        <div class="form-group">
                            <label>Status </label>
                            <div class="custom-control custom-radio custom-control-block ml-3">
                              <input type="radio" id="active" name="active" class="custom-control-input" value="1"
                                  <?php
                                        if($cat['active'] == 1) { echo "checked";}
                                    ?>
                                >
                              <label class="custom-control-label" for="active">Active</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-block ml-3">
                              <input type="radio" id="deActive" name="active" class="custom-control-input" value="0"
                                  <?php
                                        if($cat['active'] == 0) { echo "checked";}
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