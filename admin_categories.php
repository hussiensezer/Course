<?php
require 'includes/kernel.php';

middleware_admin();

$categories = select_rows("SELECT categories.*, users.first_name, users.last_name FROM categories LEFT JOIN users ON categories.user_id = users.id");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin | Show categories</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<a href="admin_category.php" class="btn btn-success">
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
								<th>Description</th>
								<th>Active</th>
								<th>Creator</th>
								<th>Created Date</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($categories as $key => $category) {
							?>
							<tr>
								<td><?php echo $key + 1; ?></td>
								<td><?php echo $category['name'] ?></td>
								<td><?php echo $category['description'] ?></td>
								<td>
									<span class="fa fa-check-circle <?php echo $category['active'] == 1 ? 'text-success' : '' ?>"></span>
								</td>
								<td>
									<?php echo ucwords($category['first_name'] . ' ' . $category['last_name']); ?>
								</td>
								<td><?php echo $category['created_at'] ?></td>
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
