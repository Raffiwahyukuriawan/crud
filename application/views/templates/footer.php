</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
	<?php if ($this->session->flashdata('success')): ?>
		Swal.fire({
			title: "Berhasil!",
			text: "<?= $this->session->flashdata('success'); ?>",
			icon: "success"
		});
	<?php elseif ($this->session->flashdata('error')): ?>
		Swal.fire({
			title: "Gagal!",
			text: "<?= $this->session->flashdata('error'); ?>",
			icon: "error"
		});
	<?php endif; ?>
</script>

<script>
    function confirmDelete(id) {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                // Arahkan ke fungsi hapus di controller
                window.location.href = "<?= site_url('buku/hapus/'); ?>" + id;
            }
        });
    }
</script>
<script src="<?= base_url('assets/bootstrap/js/bootstrap.js') ?>"></script>
</body>

</html>