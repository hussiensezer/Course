<!-- Start Nav-Bar -->
<nav class="navbar navbar-expand-lg navbar-light adminheader">
	
  <a class="navbar-brand" href="#"><img class="logo "src="layout/images/logo.png" alt="Logo"/></a>
 
 	<button class="changmode d-none d-md-block" id="button">
			<span></span>
			<span></span>
			<span></span>
	</button>
	<div class="menu ml-auto">
	  <ul class="navbar-nav mr-auto">
                 <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $name = isset($_SESSION['user']['first_name']) ? $_SESSION['user']['first_name']  : '' ;?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Profile</a>
          <a class="dropdown-item" href="#">......</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
            
    </ul>
	</div>
</nav>
<!-- End Nav-Bar -->
<!-- Start The Content -->
<div class="left-side" id="door">
    <div class="menu-col">
        <div class="tools ">
					<div class="tool">
                        <a href="roles_show.php">
                            <i class="fas fa-user-shield"></i>
                            <span class="text">Role</span>
                        </a>
					</div>	
                <div class="tool">
                        <a href="users_show.php">
                            <i class="fas fa-users"></i>
                            <span class="text">Users</span>
                        </a>
					</div>
					<div class="tool">
                        <a href="categories_show.php">
                            <i class="far fa-sticky-note"></i>
                            <span class="text">Categories</span>
                        </a>

					</div>
					<div class="tool">
                        <a href="testimonials_show.php">
                           <i class="fas fa-quote-left"></i>
                            <span class="text">Testimonials</span>
                        </a>
                   
					</div>
					<div class="tool hover">
                        <a href="courses_show.php" class="">
                            <i class="fas fa-plus"></i>
                            <span class="text">Courses</span>
                        </a>
                        <ul class="hide sub-ul">
                            <li><a href="group_course_show.php" >Courses Group</a></li>
                        </ul>
                        
					</div>
					<div class="tool hover">
                        <a href="partners_show.php">
                            <i class="fas fa-plus"></i>
                            <span class="text">Partenrs</span>
                        </a>
					</div>
				</div>
       
    </div>
</div>
