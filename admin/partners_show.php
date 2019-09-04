<?php

$pageTitle = "Show Partners";

require "init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();
$sql = "SELECT partners.*, users.first_name, users.last_name FROM partners INNER JOIN users ON user_id = users.id";
$partners = select_rows($sql);
?>


<div class="right-side full-width">
    <div class="container">
        <div class="row">
            <div class="roles col-md-12">
                <h1 class="text-center mt-5 mb-5 title">Show Partners</h1>
                <div class="table-responsive">
                    <a href="partner_create.php" class="btn btn-success mb-3 btn-sm"> <i class='fas fa-plus mr-1'></i>Create Partners</a>
                    <?php 
                        view_alerts();
                    ?>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Avatar</th>
                                <th>Name</th>
                                <th>Active</th>
                                <th>Created_By</th>
                                <th>Create_At</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                           <?php
                                foreach($partners as $no => $partner){ ?> 

                                <tr>
                                    <td> <?php echo $no + 1 ;?></td>
                                    <td> <img src="<?php echo $partner['avatar']?>" /></td>
                                    <td> <?php echo $partner['name']?>  </td>
                                    <td> 
                                        <?php 
                                            if($partner['active'] == 1) {
                                                echo "<a href='_partner/partner_active_process.php?id={$partner['id']}'><i class='fas fa-check-circle text-success'></i></a>";
                                            }else {
                                                
                                                echo "<a href='_partner/partner_active_process.php?id={$partner['id']}'><i class='fas fa-check-circle text-muted'></i></a>";
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php echo $partner['first_name'] . ' ' . $partner['last_name']?>
                                    </td>
                                    <td> <?php echo $partner['created_at']?></td>
                                    <td>
                                        <a href="_partner/partner_delete_process.php?id=<?php echo $partner['id']?>"class='confirmed'><i class="fas fa-times text-danger fa-fw mr-1"></i></a>
                                        <a href="partner_edit.php?id=<?php echo $partner['id']?>"><i class="fas fa-edit text-primary fa-fw ml-1"></i></a>
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