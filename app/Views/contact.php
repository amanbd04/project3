<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kontak Kami - MyBlog</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

	<style>
		body {
			background: url("<?= base_url('images/caffe11.jpg') ?>") no-repeat center center fixed;
			background-size: cover;
			color: #fff;
			padding-top: 70px;
			min-height: 100vh;
		}

		.bg-overlay {
			background-color: rgba(0, 0, 0, 0.6);
			border-radius: 1rem;
			padding: 2rem;
		}

		.card {
			background-color: rgba(255, 255, 255, 0.1);
			border: none;
			border-radius: 1rem;
			backdrop-filter: blur(6px);
			color: #fff;
		}

		.card-body label,
		.card-body .form-label,
		.card-body input,
		.card-body textarea,
		.card-body .input-group-text {
			color: #fff;
		}

		.form-control::placeholder {
			color: #ddd;
		}

		.form-control:focus {
			background-color: rgba(255, 255, 255, 0.2);
			border-color: #f7c08a;
			box-shadow: 0 0 0 0.2rem rgba(247, 192, 138, 0.25);
			color: #fff;
		}

		.navbar-dark .navbar-nav .nav-link.active {
			color: #f7c08a;
		}
	</style>
</head>

<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top shadow">
		<div class="container">
			<a class="navbar-brand fw-bold" href="<?= base_url() ?>">MyBlog</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item"><a class="nav-link" href="<?= base_url() ?>">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('about') ?>">About</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('post') ?>">Blog</a></li>
					<li class="nav-item"><a class="nav-link active" href="<?= base_url('contact') ?>">Kontak</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('faqs') ?>">FAQ</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Header -->
	<div class="container mb-4">
		<div class="bg-overlay text-center shadow mt-4">
			<h1 class="display-5 fw-bold"><i class="bi bi-chat-left-text-fill me-2"></i>Kontak Kami</h1>
			<p class="lead">Kami siap menerima pertanyaan, saran, dan masukan Anda.</p>
		</div>
	</div>

	<!-- Form Kontak -->
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<?php if (session()->getFlashdata('message')): ?>
					<div class="alert alert-success alert-dismissible fade show bg-success text-white border-0" role="alert">
						<i class="bi bi-check-circle-fill me-1"></i><?= session()->getFlashdata('message') ?>
						<button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				<?php endif; ?>

				<div class="card shadow-sm">
					<div class="card-body p-4">
						<h4 class="mb-4 text-warning"><i class="bi bi-envelope-paper-fill me-2"></i>Formulir Kontak</h4>
						<form action="<?= base_url('/contact/kirim') ?>" method="post">
							<div class="mb-3">
								<label for="nama" class="form-label">Nama Lengkap</label>
								<div class="input-group">
									<span class="input-group-text bg-transparent border-white"><i class="bi bi-person-fill"></i></span>
									<input type="text" class="form-control bg-transparent border-white" id="nama" name="nama" placeholder="Nama Anda" required>
								</div>
							</div>
							<div class="mb-3">
								<label for="email" class="form-label">Email</label>
								<div class="input-group">
									<span class="input-group-text bg-transparent border-white"><i class="bi bi-envelope-fill"></i></span>
									<input type="email" class="form-control bg-transparent border-white" id="email" name="email" placeholder="email@example.com" required>
								</div>
							</div>
							<div class="mb-3">
								<label for="telepon" class="form-label">Nomor Telepon</label>
								<div class="input-group">
									<span class="input-group-text bg-transparent border-white"><i class="bi bi-telephone-fill"></i></span>
									<input type="text" class="form-control bg-transparent border-white" id="telepon" name="telepon" placeholder="+62" required>
								</div>
							</div>
							<div class="mb-3">
								<label for="deskripsi" class="form-label">Pesan atau Pertanyaan</label>
								<textarea class="form-control bg-transparent border-white" id="deskripsi" name="deskripsi" rows="5" placeholder="Tulis pesan Anda di sini..." required></textarea>
							</div>
							<button type="submit" class="btn btn-warning w-100 fw-bold">
								<i class="bi bi-send-fill"></i> Kirim Pesan
							</button>
						</form>
					</div>
				</div>
				<p class="text-center mt-4"><small class="text-light">Terima kasih telah menghubungi kami. Kami akan segera merespons pesan Anda.</small></p>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<div class="container mt-5">
		<footer class="text-center text-light py-4 border-top border-light">
			&copy; <?= date('Y') ?> MyBlog. Dibuat dengan ❤️ dan kopi hangat.
		</footer>
	</div>

	<!-- Bootstrap JS -->
	<script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
