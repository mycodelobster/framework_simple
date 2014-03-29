<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
	<?php $this->load->view('partials/head') ?>
</head>
<body>
	<?php $this->load->view('partials/navbar') ?>

	<div class="container">
		<?php $this->load->view('partials/title') ?>
		<div class="row">
			<div class="col-sm-3">
				<?php $this->load->view('partials/sidebar') ?>
			</div>
			<!-- End Left Section -->
			<div class="col-sm-9">
				<div class="panel panel-default">
					<!-- Default panel contents -->
					<div class="panel-heading">Panel heading</div>
					<div class="panel-body">
						<form action="" method="POST" role="form">
							<legend>Form title</legend>

							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" name="username" class="form-control" >
							</div>

							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" name="username" class="form-control" >
							</div>

							<button type="submit" class="btn btn-default">Submit</button>
						</form>
					</div>
					<div class="panel-footer">
					</div>
				</div>
			</div>
			<!-- End Right Section -->
		</div>
	</div>

</body>
</html>