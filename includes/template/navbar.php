<?php
require_once 'init.php';
    // Select The Categories To Previwe It In NavBar
    $sql = 'SELECT name, id FROM categories WHERE active = 1';
    $categories = select_rows($sql);
    
  

?>
<!-- Start Nav-Bar -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
	
  <a class="navbar-brand" href="index.php"><img class="logo "src="layout/images/logo.png" alt="Logo"/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown active">
		  
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fas fa-braille fa-lg mr-1"></i>
          Catagories
		
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php 
            // fetch The Categories
            foreach($categories as $cate) {
              echo  "<a class='dropdown-item' href='category.php?id={$cate['id']}'><i class='fas fa-palette mr-2 fa-lg'></i>{$cate['name']}</a>";
            }
            ?>
    
        </div>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#">Courses </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">On Site Trainings</a>
      </li>  
		<li class="nav-item">
        <a class="nav-link" href="#">Training Centers</a>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="What do you want to learn" aria-label="Search">
		<i class="fas fa-search"></i>
      
    </form>
    <?php
        if(isset($_SESSION['student'])) { ?>
          <div class="menu ml-auto">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php echo $_SESSION['student']['first_name'];?>
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
      <?php
      }else{ ?>
        
        <ul class="navbar-nav ml-auto mt-0">
        <li class="nav-item">
          <a href="login.php" class="nav-link">Login</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Sign Up</a>
        </li>
        
      </ul>
       
   <?php   }
   ?>
  </div>
</nav>
<!-- End Nav-Bar -->