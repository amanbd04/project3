<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Panel - MyBlog</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
	<!-- Bootstrap Icons -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<style>
		body {
			background-color: #f4f6f9;
		}
		.header-box {
			background: linear-gradient(135deg, #6f42c1, #6610f2);
			color: white;
			border-radius: 1rem;
		}
		.table thead {
			background-color: #e9ecef;
		}
		.modal-body h2 {
			color: #dc3545;
		}
	</style>
</head>
<body>

<!-- Navbar -->
<?= $this->include('admin/navbar'); ?>

<!-- Header -->
<div class="p-5 mb-4 header-box mt-5 shadow">
	<div class="container py-5">
		<h1 class="display-5 fw-bold">📝 Admin Blog Dashboard</h1>
		<p class="lead">Kelola postingan blog kamu dengan mudah dan cepat.</p>
	</div>
</div>

<!-- Table Post List -->
<div class="container mb-5">
	<div class="card shadow-sm">
		<div class="card-header bg-white">
			<h5 class="mb-0">📄 Daftar Postingan</h5>
		</div>
		<div class="card-body p-0">
			<table class="table table-hover mb-0">
				<thead class="table-light">
					<tr>
						<th>#</th>
						<th>Judul</th>
						<th>Status</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($posts as $post): ?>
					<tr>
						<td><?= $post['id'] ?></td>
						<td>
							<strong><?= $post['title'] ?></strong><br>
							<small class="text-muted"><?= $post['created_at'] ?></small>
						</td>
						<td>
							<?php if($post['status'] === 'published'): ?>
								<span class="badge bg-success"><?= $post['status'] ?></span>
							<?php else: ?>
								<span class="badge bg-secondary"><?= $post['status'] ?></span>
							<?php endif ?>
						</td>
						<td>
							<a href="<?= base_url('admin/post/'.$post['id'].'/preview') ?>" 
							   class="btn btn-sm btn-outline-info" target="_blank"><i class="bi bi-eye"></i></a>
							<a href="<?= base_url('admin/post/'.$post['id'].'/edit') ?>" 
							   class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil-square"></i></a>
							<a href="#"
							   data-href="<?= base_url('admin/post/'.$post['id'].'/delete') ?>" 
							   onclick="confirmToDelete(this)"
							   class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<!-- Modal Konfirmasi Hapus -->
<div id="confirm-dialog" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content border-0 shadow">
			<div class="modal-body text-center">
				<i class="bi bi-exclamation-triangle-fill text-danger display-4"></i>
				<h2 class="h4 mt-3">Yakin ingin menghapus?</h2>
				<p>Data ini akan hilang selamanya dan tidak bisa dikembalikan.</p>
			</div>
			<div class="modal-footer justify-content-center border-0">
				<a href="#" role="button" id="delete-button" class="btn btn-danger px-4">Hapus</a>
				<button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Batal</button>
			</div>
		</div>
	</div>
</div>

<!-- Footer -->
<div class="container py-4">
	<footer class="pt-3 mt-4 text-muted border-top text-center">
		&copy; <?= date('Y') ?> MyBlog Admin
	</footer>
</div>

<!-- Script -->
<script>
function confirmToDelete(el) {
	document.getElementById("delete-button").setAttribute("href", el.dataset.href);
	var myModal = new bootstrap.Modal(document.getElementById('confirm-dialog'), { keyboard: false });
	myModal.show();
}
</script>

<!-- Bootstrap JS -->
<script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
