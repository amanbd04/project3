<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tentang Kopi - MyBlog</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
	<style>
		body {
			background: url("<?= base_url('images/caffe11.jpg') ?>") no-repeat center center fixed;
			background-size: cover;
			color: #fff;
		}

		.bg-overlay {
			background-color: rgba(0, 0, 0, 0.6);
			padding: 3rem;
			border-radius: 1rem;
		}

		.card {
			background-color: rgba(255, 255, 255, 0.1);
			border: none;
			backdrop-filter: blur(5px);
			color: #fff;
		}

		.card h5 {
			color: #f7c08a;
		}

		.navbar-dark .navbar-nav .nav-link.active {
			color: #f7c08a;
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() ?>">MyBlog</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url() ?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('menu') ?>">Menu</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="<?= base_url('about') ?>">About</a>
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

	<div class="p-5 mb-4 text-light bg-overlay mt-5">
		<div class="container py-5">
			<h1 class="display-4 fw-bold">Tentang Kopi</h1>
			<p class="lead">Kisah aroma, rasa, dan filosofi di balik setiap cangkir kopi yang kamu nikmati.</p>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12 my-3 card">
				<div class="card-body">
					<h5>Asal Usul Kopi</h5>
					<p>Dari dataran tinggi Ethiopia hingga kedai kecil di sudut kota, kopi adalah petualangan rasa yang telah melintasi zaman dan budaya. Ia bukan sekadar minuman, tetapi teman setia pagi hari dan sahabat saat begadang.</p>
				</div>
			</div>
			<div class="col-md-12 my-3 card">
				<div class="card-body">
					<h5>Seni di Balik Seduhan</h5>
					<p>Kopi bukan soal kafein saja, tetapi juga tentang proses. Dari tangan petani yang memetik biji terbaik, hingga barista yang menyeduhnya dengan hati – setiap langkah adalah karya seni yang menghidupkan rasa.</p>
				</div>
			</div>
			<div class="col-md-12 my-3 card">
				<div class="card-body">
					<h5>Filosofi Kopi</h5>
					<p>Kopi mengajarkan kita tentang kesabaran, kehangatan, dan kedalaman rasa. Seperti hidup, kadang pahit, tapi selalu menyisakan aroma yang tak terlupakan. Dalam diamnya, ia menyapa dengan rasa yang jujur.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container py-4 text-light">
		<footer class="pt-3 mt-4 border-top border-secondary">
			<div class="container text-center">
				&copy; <?= date('Y') ?> MyBlog - Semua tentang kopi
			</div>
		</footer>
	</div>

	<!-- Jquery dan Bootstrap JS -->
	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>

</html>
