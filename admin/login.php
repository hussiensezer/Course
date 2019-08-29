<?php 

$pageTitle = "Login";
$noNavbar = "";
include "init.php";
?>





<div class="form">
    <div class="container">
        <div class="row">
            <div class="group col-md-6">
                <h3 class='text-center '> Login To</h3>
                <img src="layout/images/logo.png" class="col-md-6 offset-md-3 mb-2">
                  <?php
                        view_alerts();
                    ?>
                <form action="login_admin_process.php" method="POST">
                    <div class="form-group">
                        <input type="email" class='form-control' name="email" placeholder="Enter Your Email" autocomplete="off" autofocus>
                        <i class="fas fa-envelope"></i>
                    </div>  
                    <div class="form-group">
                        <input type="password" class='form-control' name="pass" placeholder="Enter Your Password" autocomplete="off">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-md"> Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>










<?php 

include $tpl . 'footer.php'; 
?>