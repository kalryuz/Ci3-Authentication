<?php if ($this->session->flashdata('message')) : ?>
	<script>
		Swal.fire({
			icon: '<?= $this->session->flashdata("message")['icon'] ?>',
			title: '<?= $this->session->flashdata("message")['title'] ?>',
			text: '<?= $this->session->flashdata("message")['text'] ?>',
		});
	</script>
<?php endif; ?>