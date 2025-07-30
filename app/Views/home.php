<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MyBlog - Dunia Kopi</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>

	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark shadow">
		<div class="container">
			<a class="navbar-brand fw-bold" href="<?= base_url() ?>">MyBlog</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('about') ?>">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('post') ?>">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('contact') ?>">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('faqs') ?>">FAQ</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="p-5 mb-4 bg-light rounded-3 text-center mt-5">
		<div class="container py-5">
			<h1 class="display-5 fw-bold">Selamat Datang di Dunia Kopi</h1>
			<p class="lead">Temukan cerita, rasa, dan budaya di balik secangkir kopi</p>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3 my-3">
				<div class="card shadow-sm">
					<div class="card-body">
						<h5 class="card-title">Asal-Usul Kopi</h5>
						<p class="card-text">Kopi pertama kali ditemukan di Ethiopia dan menyebar ke seluruh dunia melalui perdagangan. Dari biji yang ditemukan secara tidak sengaja oleh penggembala kambing, kini kopi menjadi minuman global dengan sejuta rasa dan cerita.</p>
					</div>
				</div>
			</div>

			<div class="col-md-6 offset-md-3 my-3">
				<div class="card shadow-sm">
					<div class="card-body">
						<h5 class="card-title">Jenis-Jenis Kopi</h5>
						<p class="card-text">Ada dua jenis kopi utama: Arabika yang memiliki rasa halus dan asam ringan, serta Robusta yang lebih pahit dan mengandung kafein lebih tinggi. Masing-masing punya keunikan yang disukai oleh penikmatnya.</p>
					</div>
				</div>
			</div>

			<div class="col-md-6 offset-md-3 my-3">
				<div class="card shadow-sm">
					<div class="card-body">
						<h5 class="card-title">Budaya Minum Kopi</h5>
						<p class="card-text">Kopi bukan sekadar minuman. Di banyak negara, kopi adalah bagian penting dari budaya — dari upacara kopi di Ethiopia hingga budaya nongkrong di warung kopi Indonesia.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container py-4">
		<footer class="pt-3 mt-4 text-muted border-top text-center">
			&copy; <?= date('Y') ?> MyBlog
		</footer>
	</div>

	<!-- Jquery dan Bootstrap JS -->
	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>
