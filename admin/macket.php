<?php

$pageTitle = "";

require "init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();

?>



<div class="right-side full-width">

 <div class="container">
        <div class="row">
            <div class="roles col-md-12">
                <h1 class="text-center mt-5 mb-5 title">Show Users</h1>
                <div class="table-responsive">
                    <a href="create_user.php" class="btn btn-success mb-3 btn-sm"> <i class='fas fa-plus mr-1'></i>Create User</a>
                    <?php 
                        view_alerts();
                    ?>
                  </div>
            </div>
        </div>
    </div>
</div>



















<?php 

include $tpl . 'footer.php'; 
?>