<?php

$pageTitle = "Admin Board";

require "init.php";
//Check if Who Visit Our adminBoard Are Admin Or Just Trying To Enter 
checkguest();

view_alerts();
?>


<div class="adminboard">
    <div class="container">
        <div class="row mt-5">
            <!-- Start Card -->
            <div class="col-md-4  mb-5">
                <div class="card">
                  <div class="upper">
                    <i class="fas fa-user fa-2x"></i>  
                  </div>
                  <div class="card-body">
                    
                      <div class="data text-right">
                            <h4>Users</h4>
                            <h5><?php echo total('users')?></h5>
                      </div>
                    <hr class="mt-4">
                    <a href="users_show.php" >View Users</a>
                  </div>
                </div>
            </div>  
         <!-- End Card -->
                    <!-- Start Card -->
            <div class="col-md-4  mb-5">
                <div class="card">
                  <div class="upper">
                    <i class="far fa-sticky-note    fa-2x"></i>  
                  </div>
                  <div class="card-body">
                    
                      <div class="data text-right">
                            <h4>Categories</h4>
                            <h5><?php echo total('categories')?></h5>
                      </div>
                    <hr class="mt-4">
                    <a href="categories_show.php" >View Categories</a>
                  </div>
                </div>
            </div>  
         <!-- End Card -->
                    <!-- Start Card -->
            <div class="col-md-4   mb-5">
                <div class="card">
                  <div class="upper">
                    <i class="fas fa-user fa-2x"></i>  
                  </div>
                  <div class="card-body">
                    
                      <div class="data text-right">
                            <h4>Courses</h4>
                            <h5><?php echo total('courses')?></h5>
                      </div>
                    <hr class="mt-4">
                    <a href="courses_show.php" >View Courses</a>
                  </div>
                </div>
            </div>  
         <!-- End Card -->
                    <!-- Start Card -->
            <div class="col-md-4   mb-5">
                <div class="card">
                  <div class="upper">
                    <i class="fas fa-user fa-2x"></i>  
                  </div>
                  <div class="card-body">
                    
                      <div class="data text-right">
                            <h4>Partners</h4>
                            <h5><?php echo total('partners')?></h5>
                      </div>
                    <hr class="mt-4">
                    <a href="partners_show.php" >View Partners</a>
                  </div>
                </div>
            </div>  
         <!-- End Card -->
                    <!-- Start Card -->
            <div class="col-md-4   mb-5">
                <div class="card">
                  <div class="upper">
                    <i class="fas fa-user fa-2x"></i>  
                  </div>
                  <div class="card-body">
                    
                      <div class="data text-right">
                            <h4>Testimonials</h4>
                            <h5><?php echo total('testimonials')?></h5>
                      </div>
                    <hr class="mt-4">
                    <a href="testimonials_show.php" >View Testimonials</a>
                  </div>
                </div>
            </div>  
         <!-- End Card -->
                    <!-- Start Card -->
            <div class="col-md-4   mb-5">
                <div class="card">
                  <div class="upper">
                    <i class="fas fa-user fa-2x"></i>  
                  </div>
                  <div class="card-body">
                    
                      <div class="data text-right">
                            <h4>Roles</h4>
                            <h5><?php echo total('roles')?></h5>
                      </div>
                    <hr class="mt-4">
                    <a href="roles_show.php" >View Roles</a>
                  </div>
                </div>
            </div>  
         <!-- End Card -->
        
        </div>
    
    
    
</div>




















<?php 

include $tpl . 'footer.php'; 
?>