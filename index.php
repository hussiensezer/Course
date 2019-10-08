
<?php 
require_once 'init.php';

$testi =  select_rows('SELECT * FROM testimonials WHERE active = 1');

/*$i = 1;
for($i ; $i  <= 100; $i++) {

echo $sql =  "INSERT INTO testimonials (testimonial,name,position,avatar,active,user_id) VALUES ('test{$i}', 'name{$i}','postion{$i}','avatar.png', 1, 1);" . "<br>";
}*/

$total = total('testimonials');
$data = [];
$size = ceil($total / 4);

$chunked_testi = array_chunk($testi, 2, true);


?>

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

								<img src="layout/images/avater.jpg">

								</div>
								<div class="client-info">
								<p class="client-name"><b>Hussien Attia</b><span> / CEO at CGB</span></p>
								<p class="client-word">
									<b>CoursesHub</b> is a life saver. I don't have the time or money for a college education. My goal is to become a freelance web developer, and thanks to Courses HUB, I'm really close	
								</p>
								</div>
							</div>
							<!-- End  Word -->
                            <div class="client col-md-5">
								<div class="conatiner-img">

								<img src="layout/images/avater.jpg">

								</div>
								<div class="client-info">
								<p class="client-name"><b>Sezer X</b><span> / CEO at CGB</span></p>
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

                    <?php 
                        foreach($chunked_testi  as $testi) {

                       
                    ?>
					<div class="carousel-item  " data-interval="10000">
						<div class="row">
                            <?php 
                                foreach($testi as $value) {
                                    
                            ?>
							<!-- Start  Word -->
							<div class="client col-md-5">
								<div class="conatiner-img">

								<img src="layout/images/avater.jpg">

								</div>
								<div class="client-info">
								<p class="client-name"><b><?php echo $value['name']; ?></b>
                                    <span> <?php echo $value['position']?> </span></p>
								<p class="client-word">
									<b>CoursesHub</b> <?php echo $value['testimonial']?>	
								</p>
								</div>
							</div>
							<!-- End  Word -->
							<?php
                                    
                                }
                            ?>
					
						</div>
					</div>
                <?php 
                      }
                ?>
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
							<li><img src="layout/images/slider.png" alt="">li>
							<li><img src="layout/images/slider1.png" alt=""></li>
							<li><img src="layout/images/slider2.png" alt=""></li>
							<li><img src="layout/images/slider3.png" alt=""></li>
							<li><img src="layout/images/slider4.png" alt=""></li>
							<li><img src="layout/images/slider5.png" alt=""></li>
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
<?php
include $tpl . 'footer.php';

?>