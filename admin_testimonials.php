<?php
require 'includes/kernel.php';

$testimonials = select_rows("SELECT testimonials.*, users.first_name, users.last_name FROM testimonials LEFT JOIN users ON testimonials.user_id = users.id ORDER BY id DESC");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin | Show testimonials</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<a href="admin_testimonial.php" class="btn btn-success">
					<span class="fa fa-plus"></span>
					<span>Create</span>
				</a>
				<?php view_alerts(); ?>
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Position</th>
								<th>Testimonial</th>
								<th>Active</th>
								<th>Creator</th>
								<th>Created Date</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($testimonials as $key => $testimonial) {
							?>
							<tr>
								<td><?php echo $key + 1; ?></td>
								<td><?php echo $testimonial['name'] ?></td>
								<td><?php echo $testimonial['position'] ?></td>
								<td><?php echo $testimonial['testimonial'] ?></td>
								<td>
									<span class="fa fa-check-circle <?php echo $testimonial['active'] == 1 ? 'text-success' : '' ?>"></span>
								</td>
								<td>
									<?php echo ucwords($testimonial['first_name'] . ' ' . $testimonial['last_name']); ?>
								</td>
								<td><?php echo $testimonial['created_at'] ?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>



</body>
</html>
