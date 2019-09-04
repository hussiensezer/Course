<?php
require 'includes/kernel.php';
$courses = select_rows("SELECT * FROM courses WHERE active = 1");
?>

<!DOCTYP html>
<html lang="en" dir="ltr"> 
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> Courses HUB</title>
	<!-- FontAwesome-->
	<link rel="stylesheet" href="assets/css/fontawesome.min.css">
	<!-- BootStrap-->
	<link rel="stylesheet" href="assets/css/uikit.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- Main Style-->
	<link rel="stylesheet" href="assets/css/index.css">

</head>
<body>

<!-- Start Nav-Bar -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
	
  <a class="navbar-brand" href="#"><img class="logo "src="assets/images/logo.png" alt="Logo"/></a>
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
          <a class="dropdown-item" href="#"><i class="fas fa-palette mr-2 fa-lg"></i>Business</a>
          <a class="dropdown-item" href="#"><i class="fas fa-palette mr-2 fa-lg"></i>Design</a>
          <a class="dropdown-item" href="#"><i class="fas fa-palette mr-2 fa-lg"></i>Photography</a>
          <a class="dropdown-item" href="#"><i class="fas fa-palette mr-2 fa-lg"></i>Lifestyle</a>
          <a class="dropdown-item" href="#"><i class="fas fa-palette mr-2 fa-lg"></i>Health & Fitness</a>
          <a class="dropdown-item" href="#"><i class="fas fa-palette mr-2 fa-lg"></i>Music</a>
          <a class="dropdown-item" href="#"><i class="fas fa-palette mr-2 fa-lg"></i>Development</a>
          <a class="dropdown-item" href="#"><i class="fas fa-palette mr-2 fa-lg"></i>Marketing</a>
          <a class="dropdown-item" href="#"><i class="fas fa-palette mr-2 fa-lg"></i>Office Produtivity</a>
          <a class="dropdown-item" href="#"><i class="fas fa-palette mr-2 fa-lg"></i>It & Software</a>
		  <a class="dropdown-item" href="#"><i class="fas fa-palette mr-2 fa-lg"></i>Personal Development</a>
		  <a class="dropdown-item" href="#"><i class="fas fa-palette mr-2 fa-lg"></i>Teaching & Academics</a>
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
	 <ul class="navbar-nav ml-auto mt-0">
		 <li class="nav-item">
		 	<a href="#" class="nav-link">Login</a>
		 </li>
		 <li class="nav-item">
		 	<a href="#" class="nav-link">Sign Up</a>
		 </li>
	 	 
	 </ul>
  </div>
</nav>
<!-- End Nav-Bar -->

<!-- Start Header-wrapper -->
<header>
	<div class="container-fluid">
		<div class="row">
			<div class="wrapper">
				<div class="overlay"></div>
				<div class="content">
					<div class="text">
						<p>100% a platform for courses & training centers 
							from the best academies and companies.
						</p>
						<div class="row">
							<div class="box-right col-md-6">
								<span>Personal</span>
							</div>
								<div class="box-right left col-md-6 text-md-right text-right">
								<span>Business</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- End Header-wrapper -->

<!-- Start Categories -->
<div class="categories">
	<div class="container">
		<div class="row bord">
			<!-- Start Cate Text -->
			<div class="cate">
				<ul>
					<li>Categories</li>
					<li>	
						<a href="#">
						<i class="fas fa-palette mr-2 fa-lg"></i>Business</a>
					</li>
					<li>	
						<a href="#">
						<i class="fas fa-palette mr-2 fa-lg"></i>Design</a>
					</li>
					<li>	
						<a href="#">
						<i class="fas fa-palette mr-2 fa-lg"></i>Photography</a>
					</li>
					<li>	
						<a href="#">
							<i class="fas fa-palette mr-2 fa-lg"></i>Lifestyle
						</a>
					</li>	
					<li>	
						<a href="#">
						<i class="fas fa-palette mr-2 fa-lg"></i>Health & Fitness</a>
					</li>
				</ul>
			</div>
			<!-- End Cate Text -->
			
			<!-- Start 	Courses -->
		<div class="courses col-md-12">
			<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
			  <div class="carousel-inner">
				  <!-- Start Carousel Item -->
				<?php
				foreach ($courses as $key => $course) {
				?>
				<div class="carousel-item active">
					<div class="row">
						<!-- Start Card -->
						<div class="card col-lg col-md-5">
							<div class="notice">Best Seller</div>
							<div class="heart">
								<i class="fas fa-heart fa-1x"></i>
							</div>
						<div class="cover">
							<div class="overlay"></div>
							
						  <img src="https://i.udemycdn.com/course/750x422/148902_af91_14.jpg" class="card-img-top" alt="...">
							</div>
							
						  <div class="card-body">
							<p class="card-text">Fundamentals of Analyzing Real Estate Investments.</p>
							<p class="card-text">Kevin Skougland</p>
							<p class="card-text text-md-right">199.99 L.E</p>
							 <span class="stars">
								<i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
							 </span>
						  </div>
						</div>		
					<!-- End Card -->	
						<!-- Start Card -->
						<div class="card col-lg col-md-5">
							<div class="notice">Best Seller</div>
							<div class="heart">
								<i class="fas fa-heart fa-1x"></i>
							</div>
						<div class="cover">
							<div class="overlay"></div>
							
						  <img src="https://i.udemycdn.com/course/750x422/1653432_3a57_3.jpg" class="card-img-top" alt="...">
							</div>
							
						  <div class="card-body">
							<p class="card-text">Fundamentals of Analyzing Real Estate Investments.</p>
							<p class="card-text">Kevin Skougland</p>
							<p class="card-text text-md-right">199.99 L.E</p>
							 <span class="stars">
								<i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
							 </span>
						  </div>
						</div>		
					<!-- End Card -->
						<!-- Start Card -->
						<div class="card col-lg col-md-5">
							<div class="notice">Best Seller</div>
							<div class="heart">
								<i class="fas fa-heart fa-1x"></i>
							</div>
						<div class="cover">
							<div class="overlay"></div>
							
						  <img src="https://i.udemycdn.com/course/750x422/807904_7108.jpg" class="card-img-top" alt="...">
							</div>
							
						  <div class="card-body">
							<p class="card-text">Fundamentals of Analyzing Real Estate Investments.</p>
							<p class="card-text">Kevin Skougland</p>
							<p class="card-text text-md-right">199.99 L.E</p>
							 <span class="stars">
								<i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
							 </span>
						  </div>
						</div>		
					<!-- End Card -->
						<!-- Start Card -->
						<div class="card col-lg col-md-5">
							<div class="notice">Best Seller</div>
							<div class="heart">
								<i class="fas fa-heart fa-1x"></i>
							</div>
						<div class="cover">
							<div class="overlay"></div>
							
						  <img src="https://i.udemycdn.com/course/750x422/950390_270f_3.jpg" class="card-img-top" alt="...">
							</div>
							
						  <div class="card-body">
							<p class="card-text">Fundamentals of Analyzing Real Estate Investments.</p>
							<p class="card-text">Kevin Skougland</p>
							<p class="card-text text-md-right">199.99 L.E</p>
							 <span class="stars">
								<i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
							 </span>
						  </div>
						</div>		
					<!-- End Card -->
					</div>

				</div>
				<?php } ?>
						
					</div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon fas fa-angle-left fa-1x" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
						 
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
						<span class="carousel-control-next-icon fas fa-angle-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					  </a>
				</div>
			
				</div>
			<!-- Start Hot offer -->
			<div class="row hot-offers bord">
				<h4>Hot Offers</h4>
				<div class="courses col-md-12">
			<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
				  <!-- Start Carousel Item -->
				<div class="carousel-item active" data-interval="10000">
					<div class="row">
						<!-- Start Card -->
						<div class="card col-lg col-md-5">
							<div class="notice">Hot Offer</div>
							<div class="heart">
								<i class="fas fa-heart fa-1x"></i>
							</div>
						<div class="cover">
							<div class="overlay"></div>
							
						  <img src="https://i.udemycdn.com/course/750x422/148902_af91_14.jpg" class="card-img-top" alt="...">
							</div>
							
						  <div class="card-body">
							<p class="card-text">Fundamentals of Analyzing Real Estate Investments.</p>
							<p class="card-text">Kevin Skougland</p>
							<p class="card-text text-md-right">199.99 L.E</p>
							 <span class="stars">
								<i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
							 </span>
						  </div>
						</div>		
					<!-- End Card -->	
						<!-- Start Card -->
						<div class="card col-lg col-md-5">
							<div class="notice">Hot Offer</div>
							<div class="heart">
								<i class="fas fa-heart fa-1x"></i>
							</div>
						<div class="cover">
							<div class="overlay"></div>
							
						  <img src="https://i.udemycdn.com/course/750x422/1653432_3a57_3.jpg" class="card-img-top" alt="...">
							</div>
							
						  <div class="card-body">
							<p class="card-text">Fundamentals of Analyzing Real Estate Investments.</p>
							<p class="card-text">Kevin Skougland</p>
							<p class="card-text text-md-right">199.99 L.E</p>
							 <span class="stars">
								<i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
							 </span>
						  </div>
						</div>		
					<!-- End Card -->
						<!-- Start Card -->
						<div class="card col-lg col-md-5">
							<div class="notice">Hot Offer</div>
							<div class="heart">
								<i class="fas fa-heart fa-1x"></i>
							</div>
						<div class="cover">
							<div class="overlay"></div>
							
						  <img src="https://i.udemycdn.com/course/750x422/807904_7108.jpg" class="card-img-top" alt="...">
							</div>
							
						  <div class="card-body">
							<p class="card-text">Fundamentals of Analyzing Real Estate Investments.</p>
							<p class="card-text">Kevin Skougland</p>
							<p class="card-text text-md-right">199.99 L.E</p>
							 <span class="stars">
								<i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
							 </span>
						  </div>
						</div>		
					<!-- End Card -->
						<!-- Start Card -->
						<div class="card col-lg col-md-5">
							<div class="notice">Hot Offer</div>
							<div class="heart">
								<i class="fas fa-heart fa-1x"></i>
							</div>
						<div class="cover">
							<div class="overlay"></div>
							
						  <img src="https://i.udemycdn.com/course/750x422/950390_270f_3.jpg" class="card-img-top" alt="...">
							</div>
							
						  <div class="card-body">
							<p class="card-text">Fundamentals of Analyzing Real Estate Investments.</p>
							<p class="card-text">Kevin Skougland</p>
							<p class="card-text text-md-right">199.99 L.E</p>
							 <span class="stars">
								<i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
							 </span>
						  </div>
						</div>		
					<!-- End Card -->
					</div>

				</div>
			 <!-- End Carousel Item -->
				  
				  <!-- Start Carousel Item -->
				<div class="carousel-item " data-interval="2000">
					<div class="row">
						<!-- Start Card -->
						<div class="card col-lg col-md-5">
							<div class="notice">Hot Offer</div>
							<div class="heart">
								<i class="fas fa-heart fa-1x"></i>
							</div>
						<div class="cover">
							<div class="overlay"></div>
							
						  <img src="https://i.udemycdn.com/course/750x422/58207_2ec2_7.jpg" class="card-img-top" alt="...">
							</div>
							
						  <div class="card-body">
							<p class="card-text">Fundamentals of Analyzing Real Estate Investments.</p>
							<p class="card-text">Kevin Skougland</p>
							<p class="card-text text-md-right">199.99 L.E</p>
							 <span class="stars">
								<i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
							 </span>
						  </div>
						</div>		
					<!-- End Card -->	
						<!-- Start Card -->
						<div class="card col-lg col-md-5">
							<div class="notice">Hot Offer</div>
							<div class="heart">
								<i class="fas fa-heart fa-1x"></i>
							</div>
						<div class="cover">
							<div class="overlay"></div>
							
						  <img src="https://i.udemycdn.com/course/750x422/1325264_6025_3.jpg" class="card-img-top" alt="...">
							</div>
							
						  <div class="card-body">
							<p class="card-text">Fundamentals of Analyzing Real Estate Investments.</p>
							<p class="card-text">Kevin Skougland</p>
							<p class="card-text text-md-right">199.99 L.E</p>
							 <span class="stars">
								<i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
							 </span>
						  </div>
						</div>		
					<!-- End Card -->
						<!-- Start Card -->
						<div class="card col-lg col-md-5">
							<div class="notice">Hot Offer</div>
							<div class="heart">
								<i class="fas fa-heart fa-1x"></i>
							</div>
						<div class="cover">
							<div class="overlay"></div>
							
						  <img src="https://i.udemycdn.com/course/750x422/1136678_f12f_2.jpg" class="card-img-top" alt="...">
							</div>
							
						  <div class="card-body">
							<p class="card-text">Fundamentals of Analyzing Real Estate Investments.</p>
							<p class="card-text">Kevin Skougland</p>
							<p class="card-text text-md-right">199.99 L.E</p>
							 <span class="stars">
								<i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
							 </span>
						  </div>
						</div>		
					<!-- End Card -->
						<!-- Start Card -->
						<div class="card col-lg col-md-5">
							<div class="notice">Hot Offer</div>
							<div class="heart">
								<i class="fas fa-heart fa-1x"></i>
							</div>
						<div class="cover">
							<div class="overlay"></div>
							
						  <img src="https://i.udemycdn.com/course/750x422/874012_c7f2_3.jpg" class="card-img-top" alt="...">
							</div>
							
						  <div class="card-body">
							<p class="card-text">Fundamentals of Analyzing Real Estate Investments.</p>
							<p class="card-text">Kevin Skougland</p>
							<p class="card-text text-md-right">199.99 L.E</p>
							 <span class="stars">
								<i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
							 </span>
						  </div>
						</div>		
					<!-- End Card -->
					</div>

				</div>
			 <!-- End Carousel Item -->
				<!-- Start Carousel Item -->
				<div class="carousel-item ">
					<div class="row">
						<!-- Start Card -->
						<div class="card col-lg col-md-5">
							<div class="notice">Hot Offer</div>
							<div class="heart">
								<i class="fas fa-heart fa-1x"></i>
							</div>
						<div class="cover">
							<div class="overlay"></div>
							
						  <img src="https://i.udemycdn.com/course/750x422/648826_f0e5_4.jpg" class="card-img-top" alt="...">
							</div>
							
						  <div class="card-body">
							<p class="card-text">Fundamentals of Analyzing Real Estate Investments.</p>
							<p class="card-text">Kevin Skougland</p>
							<p class="card-text text-md-right">199.99 L.E</p>
							 <span class="stars">
								<i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
							 </span>
						  </div>
						</div>		
					<!-- End Card -->	
						<!-- Start Card -->
						<div class="card col-lg col-md-5">
							<div class="notice">Hot Offer</div>
							<div class="heart">
								<i class="fas fa-heart fa-1x"></i>
							</div>
						<div class="cover">
							<div class="overlay"></div>
							
						  <img src="https://i.udemycdn.com/course/750x422/765242_2578.jpg" class="card-img-top" alt="...">
							</div>
							
						  <div class="card-body">
							<p class="card-text">Fundamentals of Analyzing Real Estate Investments.</p>
							<p class="card-text">Kevin Skougland</p>
							<p class="card-text text-md-right">199.99 L.E</p>
							 <span class="stars">
								<i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
							 </span>
						  </div>
						</div>		
					<!-- End Card -->
						<!-- Start Card -->
						<div class="card col-lg col-md-5">
							<div class="notice">Hot Offer</div>
							<div class="heart">
								<i class="fas fa-heart fa-1x"></i>
							</div>
						<div class="cover">
							<div class="overlay"></div>
							
						  <img src="https://i.udemycdn.com/course/750x422/1361790_2eb7.jpg" class="card-img-top" alt="...">
							</div>
							
						  <div class="card-body">
							<p class="card-text">Fundamentals of Analyzing Real Estate Investments.</p>
							<p class="card-text">Kevin Skougland</p>
							<p class="card-text text-md-right">199.99 L.E</p>
							 <span class="stars">
								<i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
							 </span>
						  </div>
						</div>		
					<!-- End Card -->
						<!-- Start Card -->
						<div class="card col-lg col-md-5">
							<div class="notice">Hot Offer</div>
							<div class="heart">
								<i class="fas fa-heart fa-1x"></i>
							</div>
						<div class="cover">
							<div class="overlay"></div>
							
						  <img src="https://i.udemycdn.com/course/750x422/1754098_e0df_3.jpg" class="card-img-top" alt="...">
							</div>
							
						  <div class="card-body">
							<p class="card-text">Fundamentals of Analyzing Real Estate Investments.</p>
							<p class="card-text">Kevin Skougland</p>
							<p class="card-text text-md-right">199.99 L.E</p>
							 <span class="stars">
								<i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
								 <i class="fas fa-star"></i>
							 </span>
						  </div>
						</div>		
					<!-- End Card -->
					</div>

				</div>
			 <!-- End Carousel Item -->						
					</div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon fas fa-angle-left fa-1x" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
						 
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
						<span class="carousel-control-next-icon fas fa-angle-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					  </a>
				</div>
			</div>
			</div>
		</div>

<!-- End Hot-Offers -->

<!-- Start Clients Review -->
	<div class="review">
		<div class="container">
			<div class="row">
				<h4 class="col-md-12"><b>Clients</b> Review</h4>
				<!-- Start Carosuel -->
				<div class="group-clients">
				<div id="carouselExampleInterval2" class="carousel slide col-12" data-ride="carousel">
				  <div class="carousel-inner">
					  <!-- Start Carousel-Item -->
					<div class="carousel-item active " data-interval="10000">
						<div class="row">
							<!-- Start  Word -->
							<div class="client col-md-5">
								<div class="conatiner-img">

								<img src="assets/images/avater.jpg">

								</div>
								<div class="client-info">
								<p class="client-name"><b>William Smith</b><span> / CEO at CGB</span></p>
								<p class="client-word">
									<b>CoursesHub</b> is a life saver. I don't have the time or money for a college education. My goal is to become a freelance web developer, and thanks to Courses HUB, I'm really close	
								</p>
								</div>
							</div>
							<!-- End  Word -->
							
							<!-- Start  Word -->
							<div class="client col-md-5">
								<div class="conatiner-img">

								<img src="assets/images/avater.jpg">

								</div>
								<div class="client-info">
								<p class="client-name"><b>Sara Foaud</b><span> / Markter at Betslayer</span></p>
								<p class="client-word">
									<b>CoursesHub</b> is a life saver. I don't have the time or money for a college education. My goal is to become a freelance web developer, and thanks to Courses HUB, I'm really close	
								</p>
								</div>
							</div>
							<!-- End  Word -->
						</div>
					</div>
					<!-- End Carousel-Item -->
					  
							  <!-- Start Carousel-Item -->
					<div class="carousel-item"  data-interval="2000">
						<div class="row">
							<!-- Start  Word -->
							<div class="client col-md-5">
								<div class="conatiner-img">

								<img src="assets/images/avater.jpg">

								</div>
								<div class="client-info">
								<p class="client-name"><b>Marwa Mohsen</b><span> /  Senior Software Engineer</span></p>
								<p class="client-word">
									<b>CoursesHub</b> is a life saver. I don't have the time or money for a college education. My goal is to become a freelance web developer, and thanks to Courses HUB, I'm really close	
								</p>
								</div>
							</div>
							<!-- End  Word -->
							
							<!-- Start  Word -->
							<div class="client col-md-5">
								<div class="conatiner-img">

								<img src="assets/images/avater.jpg">

								</div>
								<div class="client-info">
								<p class="client-name"><b>Hussien Attia</b><span> / Social Media Specialist</span></p>
								<p class="client-word">
									<b>CoursesHub</b> is a life saver. I don't have the time or money for a college education. My goal is to become a freelance web developer, and thanks to Courses HUB, I'm really close	
								</p>
								</div>
							</div>
							<!-- End  Word -->
						</div>
					</div>
					<!-- End Carousel-Item -->
					
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleInterval2" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon  fas fa-angle-left fa-1x" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleInterval2" role="button" data-slide="next">
					<span class="carousel-control-next-icon fas fa-angle-right fa-1x" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
			</div>
			<!-- Start Carosuel -->
		</div>
	</div>
		</div>
	</div>

<!-- End Clients Review -->
	
<!-- Start Learn / Teach -->
	<div class="lea-tea">
		<div class="container">
			<div class="row">
				<div class="learn col-md-6 text-center">
					<h4>Enhance Your Skills</h4>
					<p>Learn What You Love It's Time To Change Your Life !</p>
					<a href="#" class="link">
						<span class="span">Start Learning</span>
					</a>
				</div>
				
				<div class="learn col-md-6 text-center">
					<h4>Grow Up Your Business</h4>
					<p>Target more students and earn more!</p>
					<a href="#" class="link"><span class="span">Start Teaching</span></a>
				</div>
			</div>
		</div>
	</div>
<!-- End Learn / Teach -->
	
<!-- Start Partners -->
	<div class="partners">
		<div class="container">
			<div class="row">
				<div class="header col-md-12 mb-5">
					<h4 class="text-center" ><span><b>Our</b> Partners</span></h4>
					
				<div class="brands col-md-12">
						<!-- Start -->
					<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

						<ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@m">
							<li><img src="assets/images/slider.png" alt="">li>
							<li><img src="assets/images/slider1.png" alt=""></li>
							<li><img src="assets/images/slider2.png" alt=""></li>
							<li><img src="assets/images/slider3.png" alt=""></li>
							<li><img src="assets/images/slider4.png" alt=""></li>
							<li><img src="assets/images/slider5.png" alt=""></li>
						</ul>
						</div>
						
						<!-- End -->
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- End Partners -->
<!-- Start footer  -->
<footer>
		<div class="container">
			<div class="row">
			<div class="contact col-md-12 row">
				<!-- Start Part Contact -->
				<div class="col-md-6">
					<h5>Contact Us</h5>
					<ul>
					<li><a href="#">
						<i class="fas fa-map-marker"></i>
						Unit no.4(42R) El Safa Tower- Bisector 6- Zahra El Maadi-Cairo-Egypt
						</a>
					</li>
					<li><a href="#">
						<i class="fas fa-phone"></i>Tel / Fax: ( +02 ) 111 856 452</a>
					</li>
					<li><a href="#"><i class="fas fa-envelope"></i>info@CoursesHub.com</a>
					</li>
					</ul>
				</div>
			<!-- End Part Contact -->
			<!-- Start Part Contact -->
				<div class="col-md-3">
					<h5>Socail</h5>
					<ul>
					<li><a href="#"><i class="fab fa-facebook-f"></i>Facebook</a></li>
					<li><a href="#"><i class="fab fa-twitter"></i>Twitter</a></li>
					<li><a href="#"><i class="fab fa-google"></i>Google</a></li>
					<li><a href="#"><i class="fab fa-linkedin-in"></i>LinkedIn</a></li>
					</ul>
				</div>
			<!-- End Part Contact -->
				<!-- Start Part Contact -->
				<div class="col-md-3">
					<h5>Quick Links</h5>
					<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Courses</a></li>
					<li><a href="#">Contact</a></li>
					</ul>
				</div>
			<!-- End Part Contact -->
			</div>
		</div>
	</div>
	<div class="copy-right col-md-12 text-center">
      © Copyright 2019. All Rights Reserved for CoursesHub for online services.
	</div>
</footer>
<!-- End footer  -->
<!-- Jquery-->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/ajex.js"></script>

<!-- BootStrap And Other Js -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/uikit-icons.min.js"></script>
<script src="assets/js/uikit.min.js"></script>
</body>
</html>