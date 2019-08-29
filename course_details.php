<?php
require 'kernel.php';

if (isset($_GET['course_id']) && !empty($_GET['course_id']) && is_numeric($_GET['course_id'])) {
	$id = $_GET['course_id'];
} else {
	redirect('index.php');
}

$course = select_row("SELECT * FROM courses WHERE id = {$id} AND active = 1 LIMIT 1");

if (empty($course)) {
	redirect('index.php');
}

$instructor = select_row("SELECT * FROM users WHERE id = {$course['instructor_id']} LIMIT 1");

$groups = select_rows("SELECT * FROM course_groups WHERE course_id = {$id} AND active = 1");

$price = $course['price'];

if ($course['discount']) {
	if ($course['discount_type'] === 'fixed') {
		$price = $course['price'] - $course['discount'];
	} elseif ($course['discount_type'] === 'percent') {
		$price = $course['price'] - (($course['discount'] / 100) * $course['price']);
	}
}

?>
<!DOCTYPE html>
<html>
<head>
<title>course page</title>
 <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

 <link rel='stylesheet' href='assets/css/course_details.css'>

</head>
<body>

<div class="container backgroundWhite">
<div class="row   course_info">
<div class="col-3">
<img width="260" height="150" src="<?php echo $course['avatar']; ?>" alt="">
</div>
<div class="col-9  hedder_info">
<h1><?php echo $course['name']; ?></h1>
<h6><?php echo $course['title']; ?></h6>
<h6><?php echo $instructor['first_name'] . ' ' . $instructor['last_name']; ?> </h6>
<div class="star-rating">
	<input type="radio" id="5-stars" name="rating" value="5" />
	<label for="5-stars" class="star">&bigstar;</label>
	<input type="radio" id="4-stars" name="rating" value="4" />
	<label for="4-stars" class="star">&bigstar;</label>
	<input type="radio" id="3-stars" name="rating" value="3" />
	<label for="3-stars" class="star">&bigstar;</label>
	<input type="radio" id="2-stars" name="rating" value="2" />
	<label for="2-stars" class="star">&bigstar;</label> 
	<input type="radio" id="1-star" name="rating" value="1" />
	<label for="1-star" class="star">&bigstar;</label>
</div>

<h5>
<?php 
if (empty($course['discount'])) {
	echo $course['price'];
} else {
	echo "<del class='mr-3'>{$course['price']}</del>";
	echo $price;
}
?>
LE
</h5>
</div>
</div>


<div class="container">


<div class="row  buy_but">


<div class="btn-container"><span class="device-update-link play-button tv large"> Buy  </span>
</div>


</div>

<div style="margin-top:30px;">
<?php
if (!empty($course['requirements'])) {
?>
<h1>Requirements</h1>

 <div>
 <?php echo $course['requirements']; ?>
            </div>
        <?php } ?>

<div style="margin-top:30px;">
<h1>Description</h1>
 <div>
<?php echo $course['description']; ?>
</div>
</div>
</div>
</div>
</div>


<div class="container backgroundWhite">
<div class="row" style=" margin-top: 30px; margin-bottom: 20px;">
<div class="col-3" >
 <div class="img-holder" >
                        <div  style=" text-align: center; margin-top:5xp;">
                            <img src="images/fcaebook.jpg">
							<h5><?php echo $instructor['first_name'] . ' ' . $instructor['last_name']; ?></h5>
                        <h6>Full stack develoer</h6>


						<div class="star-rating  starss" style=" width: 6em;">
	<input type="radio" id="5-stars" name="rating" value="5" />
	<label for="5-stars" class="star">&bigstar;</label>
	<input type="radio" id="4-stars" name="rating" value="4" />
	<label for="4-stars" class="star">&bigstar;</label>
	<input type="radio" id="3-stars" name="rating" value="3" />
	<label for="3-stars" class="star">&bigstar;</label>
	<input type="radio" id="2-stars" name="rating" value="2" />
	<label for="2-stars" class="star">&bigstar;</label> 
	<input type="radio" id="1-star" name="rating" value="1" />
	<label for="1-star" class="star">&bigstar;</label>
</div>

                        </div>
                    </div>


</div>
<div class="col-9">
<h3>ABOUT</h3>
<h5>I'm a Full-stack Web Develope. I have been working with PHP, 00P, Laravel. MVC. Symfony, Javascript. VueJs. SQL, 
Scraping. Crawling. CRM, CMS, ERP systems. AJAX, MYSql, Mango. Microsoft SQL, Redid. jquery, Angular I.x. HtghCharts. 
GoogleCharts. Google Map. ChartsJs, Amcharts. JSON, Bootstrap. Materialize, Html, Htm15, Css3 and many more tor 4 
years</h5>
<hr style="border: .5px solid black">
<h3>SKILLS</h3>
<div class="row">
<div class="btn-container"><span class="device-update-link skill_but tv large"> PHP  </span></div>
<div class="btn-container"><span class="device-update-link skill_but tv large"> Laravel  </span></div>
<div class="btn-container"><span class="device-update-link skill_but tv large"> SQL</span></div>
<div class="btn-container"><span class="device-update-link skill_but tv large"> VueJs  </span></div>
<div class="btn-container"><span class="device-update-link skill_but tv large"> AngularJs</span></div>
<div class="btn-container"><span class="device-update-link skill_but tv large"> NodeJS</span></div>
<div class="btn-container"><span class="device-update-link skill_but tv large"> Mongo</span></div>
<div class="btn-container"><span class="device-update-link skill_but tv large"> MYSql</span></div>
<div class="btn-container"><span class="device-update-link skill_but tv large"> ChartsJs</span></div>
<div class="btn-container"><span class="device-update-link skill_but tv large"> Jquery</span></div>
<div class="btn-container"><span class="device-update-link skill_but tv large"> Javascript</span></div>
<div class="btn-container"><span class="device-update-link skill_but tv large"> oop</span></div>
<div class="btn-container"><span class="device-update-link skill_but tv large"> Symfony </span></div>
<div class="btn-container"><span class="device-update-link skill_but tv large"> Html  </span></div>
<div class="btn-container"><span class="device-update-link skill_but tv large"> Css </span></div>
<div class="btn-container"><span class="device-update-link skill_but tv large"> Mvc</span></div>
</div>

</div>


</div>
</div>



<div class="container backgroundWhite">
<div class="row" style="margin: 20px;">
<div class="col-12	">

	<table class="table table-hover">
		<thead>
			<tr>
				<th>name</th>
				<th>session count</th>
				<th>start date</th>
				<th>end date</th>
				<th>max students</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($groups as $key => $group) {
			?>
			<tr>
				<td><?php echo $group['name']; ?></td>
				<td><?php echo $group['session_count']; ?></td>
				<td><?php echo $group['start_date']; ?></td>
				<td><?php echo $group['end_date']; ?></td>
				<td><?php echo $group['max_students']; ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
</div>


<div class="container backgroundWhite">
<h5 style="text-align:center;margin-top:10px;margin-bottom:10px"  class="font-weight-bold">Review The Course</h5>


<div class="row">
<div class="col-md-3 col-md-3" style="display:inline-flex">
<p class="font-weight-bold">Rate</p>

<div class="star-rating">
	<input type="radio" id="5-stars" name="rating" value="5" />
	<label for="5-stars" class="star">&bigstar;</label>
	<input type="radio" id="4-stars" name="rating" value="4" />
	<label for="4-stars" class="star">&bigstar;</label>
	<input type="radio" id="3-stars" name="rating" value="3" />
	<label for="3-stars" class="star">&bigstar;</label>
	<input type="radio" id="2-stars" name="rating" value="2" />
	<label for="2-stars" class="star">&bigstar;</label> 
	<input type="radio" id="1-star" name="rating" value="1" />
	<label for="1-star" class="star">&bigstar;</label>
</div>
</div>
<div class="col-md-8 col-md-8">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="please insert your review..." aria-label="Recipient's username" aria-describedby="button-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button" >Review</button>
  </div>
</div>
</div>
</div>






</div>

</body>
</html>

<script type="text/javascript">



</script>