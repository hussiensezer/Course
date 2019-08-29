<?php
require 'includes/kernel.php';

middleware_admin();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin | Create Category</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php view_alerts(); ?>

				<form method="POST" action="admin_category_process.php">
					<div class="form-group">
						<input class="form-control" type="text" name="name" placeholder="Category name">
					</div>
					<div class="form-group">
						<textarea class="form-control" name="description" placeholder="Category description"></textarea>
					</div>
					<div class="form-group">
						<label for="active">Active</label>
						<input id="active" class="form-control" type="checkbox" name="active" value="1">
					</div>
					<div class="form-group">
						<button class="btn btn-primary w-100">Create Category</button>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>