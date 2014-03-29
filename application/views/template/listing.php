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
					<div class="panel-heading">Table Title</div>
					<div class="panel-body">
						<a href="<?php echo base_url()?>" class="btn btn-default pull-right">Add New</a>
					</div>

					<!-- Table -->
					<table class="table">
						<thead>
							<tr>
								<th>Heading 1</th>
								<th>Heading 2</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php for($i=0;$i<10;$i++) { ?>
							<tr>
								<td>Username <?php echo $i ?></td>
								<td>Email <?php echo $i ?></td>
								<td>
									<div class="btn-group">
										<a href="<?php echo base_url()?>" class="btn btn-default pull-left">Delete</a>
										<a href="<?php echo base_url()?>" class="btn btn-default pull-left">Edit</a>
										<a href="<?php echo base_url()?>" class="btn btn-default pull-left">View</a>
									</div>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>

					<div class="panel-footer">
						<ul class="pagination pull-right">
							<li><a href="#">&laquo;</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">&raquo;</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- End Panel -->
			</div>
			<!-- End Right Section -->
		</div>
	</div>

</body>
</html>