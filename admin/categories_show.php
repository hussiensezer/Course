<?php

$pageTitle = "Show Categories";
require "init.php";
checkguest();
$sql = "SELECT categories.* , users.first_name , users.last_name FROM categories INNER JOIN users ON categories.user_id  =  users.id";
$cateogries = select_rows($sql);
?>








<div class="right-side full-width">

 <div class="container">
        <div class="row">
            <div class="roles col-md-12">
                <h1 class="text-center mt-5 mb-5 title">Show Categories</h1>
                <div class="table-responsive">
                    <a href="category_create.php" class="btn btn-success mb-3 btn-sm"> <i class='fas fa-plus mr-1'></i>Create Category</a>
                    <?php 
                        view_alerts();
                    ?>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Active</th>
                            <th>Create_By</th>
                            <th>Create_At</th>
                            <th>Updated_At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php 
                            foreach($cateogries as $no => $cat) { ?>
                            <tr>
                                <td><?php echo $no + 1 ;?></td>
                                <td> <?php echo $cat['name'] ;?></td>
                                <td> <?php echo $cat['description'] ;?></td>
                                <td><?php 
                                      if($cat['active'] == 1) {
                                                echo "<a href='_category/category_active_process.php?id={$cat['id']}'><i class='fas fa-check-circle text-success'></i></a>";
                                            }else {

                                                echo "<a href='_category/category_active_process.php?id={$cat['id']}'><i class='fas fa-check-circle text-muted'></i></a>";
                                            }

                                    
                                        ?>
                                </td>
                                <td><?php echo $cat['first_name'] . ' ' . $cat['last_name'];?></td>
                                <td><?php echo $cat['created_at'];?></td>
                                <td><?php echo $cat['updated_at'];?></td>
                                 <td>
                                        <a href="_category/category_delete_process.php?id=<?php echo $cat['id']?>"class='confirmed'><i class="fas fa-times text-danger fa-fw mr-1"></i></a>
                                        <a href="category_edit.php?id=<?php echo $cat['id']?>"><i class="fas fa-edit text-primary fa-fw ml-1"></i></a>
                                 </td>
                        
                        
                        
                            </tr>
                        
                        
                        
                     <?php } ?>
                    
                    </tbody>
                
                </table>
            </div>
        </div>
    </div>
</div>




















<?php


include $tpl . "footer.php";