<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard Page</title>

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
			<div class="card-header d-flex align-items-center justify-content-between">
				<h4>Dashboard</h4>
				<button type="button" id="logoutBtn" class="btn btn-danger btn-sm rounded">Logout</button>
			</div>
			<div class="card-body">
				<h5>Welcome, <b><?= $this->session->userdata('name') ?></b> as <b><?= $this->session->userdata('role') ?></b></h5>
			</div>
		</div>
	</div>

	<script src="<?= base_url('assets') ?>/js/bootstrap.bundle.min.js"></script>
	<script>
		document.getElementById('logoutBtn').addEventListener('click', 
			function(event) {
		    Swal.fire({
		        title: "Are you sure?",
		        text: "You will be logged out!",
		        icon: "warning",
		        showCancelButton: true,
		        customClass: {
		            confirmButton: "btn btn-danger me-2",
		            cancelButton: "btn btn-secondary"
		        },
		        buttonsStyling: false,
		        confirmButtonText: "Sure",
		        cancelButtonText: "Cancel"
		    }).then((result) => {
		        if (result.isConfirmed) {
		            window.location.href = "<?= base_url('login/logout') ?>";
		        }
		    });
		});
	</script>
</body>
</html>