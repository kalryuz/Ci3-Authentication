<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>

	<!-- Bootstrap css -->
	<link href="<?= base_url('assets') ?>/css/bootstrap.min.css" rel="stylesheet">

	<!-- Sweetalert2 -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
	<!-- Message -->
	<?php $this->load->view('includes/message') ?>

	<div class="container col-lg-4 mt-5">
		<div class="card">
			<h4 class="card-header">Login Section</h4>
			<div class="card-body">
				<form action="<?= base_url('login/check_login') ?>" method="post">
				  	<div class="mb-3">
					    <label class="form-label">Email Address</label>
					    <input type="email" name="email" class="form-control" placeholder="youremail@your.com">
					    <?= form_error('email', '<small class="text-danger">', '</small>') ?>
		  			</div>
				  	<div class="mb-3">
					    <label class="form-label">Password</label>
					    <input type="password" name="password" class="form-control" placeholder="********">
					    <?= form_error('password', '<small class="text-danger">', '</small>') ?>
				  	</div>
				  	<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
		<p class="mt-2 text-center">@Developed by <a href="https://kalryuz.com" target="_blank">Kalryuz Dev</a></p>
	</div>

	<script src="<?= base_url('assets') ?>/js/bootstrap.bundle.min.js"></script>
</body>
</html>