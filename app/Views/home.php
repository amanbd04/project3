<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MyBlog - Dunia Kopi</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

	<style>
		body {
			background-image: url('<?= base_url('images/caffe11.jpg') ?>');
			background-size: cover;
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-position: center;
		}

		.bg-light {
			background-color: rgba(255, 255, 255, 0.6) !important;
		}

		.card {
			background-color: rgba(255, 255, 255, 0.7);
			transition: transform 0.3s ease, box-shadow 0.3s ease;
		}

		.card:hover {
			transform: translateY(-5px);
			box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
		}

		footer {
			background-color: rgba(255, 255, 255, 0.5);
			border-radius: 10px;
			font-weight: bold;
		}

		/* Hover effect untuk navbar link */
		.navbar-nav .nav-link {
			position: relative;
			transition: color 0.3s ease;
		}

		.navbar-nav .nav-link:hover {
			color: #f8c146 !important;
		}

		.navbar-nav .nav-link::after {
			content: '';
			display: block;
			width: 0%;
			height: 2px;
			background: #f8c146;
			transition: width 0.3s;
			position: absolute;
			left: 0;
			bottom: 0;
		}

		.navbar-nav .nav-link:hover::after {
			width: 100%;
		}

		/* Hover lucu pada heading utama */
		.welcome-title {
			transition: all 0.4s ease;
			display: inline-block;
			cursor: pointer;
		}

		.welcome-title:hover {
			color: #6f4e37; /* warna kopi */
			transform: rotate(-2deg) scale(1.08);
			text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
			animation: wiggle 0.4s ease-in-out;
		}

		@keyframes wiggle {
			0% {
				transform: rotate(0deg);
			}

			25% {
				transform: rotate(2deg);
			}

			50% {
				transform: rotate(-2deg);
			}

			75% {
				transform: rotate(1deg);
			}

			100% {
				transform: rotate(0deg);
			}
		}
	</style>
</head>

<body>

	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark shadow">
		<div class="container">
			<a class="navbar-brand fw-bold" href="<?= base_url() ?>">MyBlog</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Menu</a>
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

	<!-- Hero Section -->
	<div class="p-5 mb-4 bg-light rounded-3 text-center mt-5">
		<div class="container py-5">
			<h1 class="display-5 fw-bold welcome-title">Selamat Datang di Dunia Kopi</h1>
			<p class="lead">Temukan cerita, rasa, dan budaya di balik secangkir kopi</p>
		</div>
	</div>

	<!-- Konten Card -->
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

	<!-- Footer -->
	<div class="container py-5">
		<footer class="text-muted border-top text-center">
			&copy; 2025 MyBlog
		</footer>
	</div>

	<!-- JQuery dan Bootstrap JS -->
	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>

</body>

</html>
