<?php

$pageTitle = "Show Testimonials";

require "init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();
$sql = "SELECT testimonials.*, users.first_name, users.last_name FROM testimonials INNER JOIN users ON user_id = users.id";
$testimonials = select_rows($sql);
?>


<div class="right-side full-width">
    <div class="container">
        <div class="row">
            <div class="roles col-md-12">
                <h1 class="text-center mt-5 mb-5 title">Show Testimonials</h1>
                <div class="table-responsive">
                    <a href="testimonail_create.php" class="btn btn-success mb-3 btn-sm"> <i class='fas fa-plus mr-1'></i>Create Testimonial</a>
                    <?php 
                        view_alerts();
                    ?>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Testimonials</th>
                                <th>Avatar</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Active</th>
                                <th>Created_By</th>
                                <th>Create_At</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                           <?php
                                foreach($testimonials as $no => $testi){ ?> 

                                <tr>
                                    <td> <?php echo $no + 1 ;?></td>
                                    <td> <?php echo $testi['testimonial']?></td>
                                    <td> <img src="<?php echo $testi['avatar']?>" /></td>
                                    <td> <?php echo $testi['name']?>  </td>
                                    <td> <?php echo $testi['position']?>  </td>
                                    <td> 
                                        <?php 
                                            if($testi['active'] == 1) {
                                                echo "<a href='_testimonail/testimonial_active_process.php?id={$testi['id']}'><i class='fas fa-check-circle text-success'></i></a>";
                                            }else {
                                                
                                                echo "<a href='_testimonail/testimonial_active_process.php?id={$testi['id']}'><i class='fas fa-check-circle text-muted'></i></a>";
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php echo $testi['first_name'] . ' ' . $testi['last_name']?>
                                    </td>
                                    <td> <?php echo $testi['created_at']?></td>
                                    <td>
                                        <a href="_testimonail/testimonial_delete_process.php?id=<?php echo $testi['id']?>"class='confirmed'><i class="fas fa-times text-danger fa-fw mr-1"></i></a>
                                        <a href="testimonial_edit.php?id=<?php echo $testi['id']?>"><i class="fas fa-edit text-primary fa-fw ml-1"></i></a>
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