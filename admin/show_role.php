<?php

$pageTitle = "Roles ";

require "init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();
$sql = "SELECT * FROM roles";
$roles = select_rows($sql);
?>


<div class="right-side full-width">
    <div class="container">
        <div class="row">
            <div class="roles col-md-12">
                <h1 class="text-center mt-5 mb-5 title">Show Roles</h1>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Active</th>
                                <th>Created_At</th>
                                <th>Update_At</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                           <?php
                                foreach($roles as $no => $role){ ?> 

                                <tr>
                                    <td> <?php echo $no + 1 ;?></td>
                                    <td> <?php echo $role['name']?></td>
                                    <td> 
                                        <?php 
                                            if($role['active'] == 1) {
                                                echo "<a href='active_role.php?id={$role['id']}'><i class='fas fa-check-circle text-success'></i></a>";
                                            }else {
                                                
                                                echo "<a href='active_role.php?id={$role['id']}'><i class='fas fa-check-circle text-muted'></i></a>";
                                            }
                                        ?>
                                    </td>
                                    <td> <?php echo $role['created_at']?></td>
                                    <td> <?php echo $role['updated_at']?></td>
                                    <td>
                                        <a href="delete_role.php?id=<?php echo $role['id']?>"><i class="fas fa-times text-danger fa-fw mr-1"></i></a>
                                        <a href="edit_role.php?id=<?php echo $role['id']?>"><i class="fas fa-edit text-primary fa-fw ml-1"></i></a>
                                    </td>
                                </tr>

                            <?php
                                }
                            ?>

                        </tbody>
                </table>
            </div>
            </div>
        </div>
    
    </div>
    
</div>




















<?php 

include $tpl . 'footer.php'; 
?>