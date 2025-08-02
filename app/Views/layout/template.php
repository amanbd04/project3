<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title><?= $title ?? 'MyBlog' ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">

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
		}

		footer {
			background-color: rgba(255, 255, 255, 0.5);
			border-radius: 10px;
			font-weight: bold;
		}
	</style>
</head>

<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark shadow">
		<div class="container">
			<a class="navbar-brand fw-bold" href="<?= base_url() ?>">MyBlog</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url() ?>">Home</a>
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

	<!-- Konten Halaman -->
	<div class="container mt-5 pt-5">
		<?= $this->renderSection('content') ?>
	</div>

	<!-- Footer -->
	<div class="container py-4">
		<footer class="pt-3 mt-4 text-muted border-top text-center">
			&copy; 2025 MyBlog
		</footer>
	</div>

	<!-- Bootstrap JS -->
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>

</html>
