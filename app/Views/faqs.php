<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FAQ - MyBlog</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

	<style>
		body {
			background: url("<?= base_url('images/caffe11.jpg') ?>") no-repeat center center fixed;
			background-size: cover;
			color: #fff;
			padding-top: 70px;
		}

		.bg-overlay {
			background-color: rgba(0, 0, 0, 0.6);
			border-radius: 1rem;
			padding: 2rem;
			margin-bottom: 2rem;
		}

		.card {
			background-color: rgba(255, 255, 255, 0.05);
			border: none;
			border-radius: 1rem;
			backdrop-filter: blur(6px);
			color: #fff;
			cursor: pointer;
			transition: transform 0.2s ease;
		}

		.card:hover {
			transform: scale(1.01);
		}

		.card h5 {
			color: #f7c08a;
		}

		.navbar-dark .navbar-nav .nav-link.active {
			color: #f7c08a;
		}

		.faq-answer {
			display: none;
			padding-top: 0.5rem;
			color: #e2e2e2;
		}
	</style>
</head>

<body>

	<!-- Navbar -->
	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top shadow">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() ?>">MyBlog</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item"><a class="nav-link" href="<?= base_url() ?>">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('about') ?>">About</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('post') ?>">Blog</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('contact') ?>">Contact</a></li>
					<li class="nav-item"><a class="nav-link active" href="<?= base_url('faqs') ?>">FAQ</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Header -->
	<div class="container mt-5">
		<div class="bg-overlay text-center shadow">
			<h1 class="display-5 fw-bold"><i class="bi bi-cup-hot-fill me-2"></i>FAQ Seputar Kopi</h1>
			<p class="lead">Pertanyaan yang sering muncul dari para pecinta kopi seperti kamu ☕</p>
		</div>
	</div>

	<!-- FAQ Content -->
	<div class="container">
		<div class="row">
			<div class="col-md-12 my-3 card" onclick="toggleFAQ('faq1')">
				<div class="card-body">
					<h5><i class="bi bi-question-circle-fill me-2"></i>Apa perbedaan antara Arabica dan Robusta?</h5>
					<p class="faq-answer" id="faq1">Arabica memiliki rasa yang lebih halus dan kompleks dengan kadar kafein yang lebih rendah, sementara Robusta memiliki rasa lebih pahit, kandungan kafein lebih tinggi, dan body lebih kuat.</p>
				</div>
			</div>
			<div class="col-md-12 my-3 card" onclick="toggleFAQ('faq2')">
				<div class="card-body">
					<h5><i class="bi bi-question-circle-fill me-2"></i>Bagaimana cara menyimpan kopi agar tetap segar?</h5>
					<p class="faq-answer" id="faq2">Simpan kopi di tempat kedap udara, gelap, dan sejuk. Hindari menyimpannya di lemari es karena bisa menyerap bau makanan lain.</p>
				</div>
			</div>
			<div class="col-md-12 my-3 card" onclick="toggleFAQ('faq3')">
				<div class="card-body">
					<h5><i class="bi bi-question-circle-fill me-2"></i>Lebih baik beli kopi bubuk atau biji?</h5>
					<p class="faq-answer" id="faq3">Lebih baik beli biji kopi utuh dan menggilingnya sebelum diseduh untuk menjaga aroma dan rasa tetap segar maksimal.</p>
				</div>
			</div>
			<div class="col-md-12 my-3 card" onclick="toggleFAQ('faq4')">
				<div class="card-body">
					<h5><i class="bi bi-question-circle-fill me-2"></i>Berapa kali idealnya minum kopi dalam sehari?</h5>
					<p class="faq-answer" id="faq4">Secara umum, 1-3 cangkir per hari dianggap aman dan bisa memberi manfaat, namun setiap orang memiliki toleransi kafein yang berbeda.</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<div class="container py-4">
		<footer class="pt-3 mt-4 text-light border-top border-light text-center">
			&copy; <?= date('Y') ?> MyBlog — Dari biji ke hati ❤️
		</footer>
	</div>

	<!-- JS Scripts -->
	<script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
	<script>
		function toggleFAQ(id) {
			const el = document.getElementById(id);
			if (el.style.display === "none" || el.style.display === "") {
				el.style.display = "block";
			} else {
				el.style.display = "none";
			}
		}
	</script>
</body>

</html>
