<?php

require '../includes/kernel.php';

if (isset($_GET['user_id']) && !empty($_GET['user_id']) && is_numeric($_GET['user_id'])) {
	$id = $_GET['user_id'];
} else {
	redirect('show_users.php');
}

$user = select_row("SELECT * FROM users WHERE id = {$id}");

if (empty($user)) {
	redirect('show_users.php');
}

$roles = select_rows("SELECT * FROM roles");
?>

<!DOCTYP html>
<html lang="en" dir="ltr"> 
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> Courses HUB</title>
	<!-- FontAwesome-->
	<link rel="stylesheet" href="../assets/css/fontawesome.min.css">
	<!-- BootStrap-->
	<link rel="stylesheet" href="../assets/css/uikit.min.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<!-- Main Style-->
	<link rel="stylesheet" href="../assets/css/index.css">

</head>
<body style="background-color:#EFEFEF">

<!-- Start Nav-Bar -->
<nav class="navbar navbar-expand-lg navbar-light adminheader">
	
  <a class="navbar-brand" href="#"><img class="logo "src="../assets/images/logo.png" alt="Logo"/></a>
 
 	<button class="changmode d-none d-md-block" onclick="theDoor()">
			<span></span>
			<span></span>
			<span></span>
	</button>
	<div class="menu ml-auto">
		<img src="../assets/images/avater.jpg" >
	</div>
</nav>
<!-- End Nav-Bar -->
<!-- Start The Content -->
	
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="right-side col-md-3 active" id="thedoor">
				<div class="tools ">
					<div class="tool">
						<i class="fas fa-users"></i>
						<span>Users</span>
					</div>
					<div class="tool">
						<i class="far fa-sticky-note"></i>
						<span>Categories</span>
					</div>
					<div class="tool">
					<i class="fas fa-quote-left"></i>
						<span>Testimonials</span>
					</div>
					<div class="tool">
						<i class="fas fa-plus"></i>
						<span>Courses</span>
					</div>
					<div class="tool">
						<i class="fas fa-plus"></i>
						<span>Partenrs</span>
					</div>
				</div>
			</div>
			<div class="left-side col-md-9 full-width" id="full-width">
				<div class="add-new">
          <div class="p-2">
            <h3 class="text-muted px-4">Create new user</h3>
            <form method="POST" action="edit_user_process.php?user_id=<?php echo $id; ?>">
              <?php view_alerts(); ?>
              <input type="hidden" name="id" value="<?php  echo $id; ?>">
              <div class="form-group">
                <input type="" name="first_name" class="form-control" placeholder="First name" value="<?php echo $user['first_name']; ?>">
              </div>
              <div class="form-group">
                <input type="" name="last_name" class="form-control" placeholder="Last name" value="<?php echo $user['last_name']; ?>">
              </div>
              <div class="form-group">
                <select name="role_id" class="form-control">
                  <option disabled selected>Plase select user role</option>
                  <?php 
                  foreach ($roles as $key => $role) {
                    echo "<option " . ($user['role_id'] == $role['id'] ? 'selected' : '') . " value='{$role['id']}'>{$role['name']}</option>";
                  } ?>
                </select>
              </div>
              <div class="form-group">
                <input class="btn btn-success" type="submit" value="Update">
              </div>
            </form>
          </div>
				</div>
			</div>
		</div>
		
	</div>
</div>

<!-- End The Content -->

<!-- Jquery-->
<script src="../assets/js/jquery-3.3.1.min.js"></script>

<!-- BootStrap And Other Js -->
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/main.js"></script>
</body>
</html>