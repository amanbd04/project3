<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blog - MyBlog</title>

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

		.card {
			background-color: rgba(255, 255, 255, 0.1);
			border: none;
			border-radius: 1rem;
			backdrop-filter: blur(5px);
			color: #fff;
			cursor: pointer;
			transition: transform 0.2s;
		}

		.card:hover {
			transform: scale(1.01);
		}

		.card-body a {
			color: #f7c08a;
			text-decoration: none;
		}

		.card-body a:hover {
			text-decoration: underline;
		}

		.navbar-dark .navbar-nav .nav-link.active {
			color: #f7c08a;
		}

		.bg-overlay {
			background-color: rgba(0, 0, 0, 0.6);
			border-radius: 1rem;
			padding: 2rem;
			margin-bottom: 2rem;
		}
	</style>
</head>

<body>

	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top shadow">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() ?>">MyBlog</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item"><a class="nav-link" href="<?= base_url() ?>">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('menu') ?>">Menu</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('about') ?>">About</a></li>
					<li class="nav-item"><a class="nav-link active" href="<?= base_url('post') ?>">Blog</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('contact') ?>">Contact</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('faqs') ?>">FAQ</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container mt-5">
		<div class="bg-overlay text-center shadow">
			<h1 class="display-5 fw-bold">Aroma Cerita</h1>
			<p class="lead">Rangkuman kisah, opini, dan inspirasi yang diseduh hangat dalam setiap tulisan.</p>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<?php foreach ($posts as $post) : ?>
				<div class="col-md-12 my-3">
					<div class="card shadow-sm" onclick="togglePost('post<?= $post['id'] ?>')">
						<div class="card-body">
							<h5 class="h5"><i class="bi bi-journal-richtext me-2 text-warning"></i><a href="/post/<?= $post['slug'] ?>"><?= $post['title'] ?></a></h5>
							<p id="excerpt-post<?= $post['id'] ?>"><?= substr(strip_tags($post['content']), 0, 120) ?>...</p>
							<p id="full-post<?= $post['id'] ?>" style="display: none;"><?= strip_tags($post['content']) ?></p>
							<button class="btn btn-sm btn-warning mt-2" id="toggle-btn<?= $post['id'] ?>">Baca Selengkapnya</button>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>

	<div class="container py-4">
		<footer class="pt-3 mt-4 text-light border-top border-secondary text-center">
			&copy; <?= date('Y') ?> MyBlog. Inspirasi secangkir demi secangkir ☕
		</footer>
	</div>

	<!-- Scripts -->
	<script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
	<script>
		function togglePost(id) {
			const full = document.getElementById('full-' + id);
			const excerpt = document.getElementById('excerpt-' + id);
			const btn = document.getElementById('toggle-btn' + id.replace('post', ''));

			if (full.style.display === 'none') {
				full.style.display = 'block';
				excerpt.style.display = 'none';
				btn.innerText = 'Sembunyikan';
			} else {
				full.style.display = 'none';
				excerpt.style.display = 'block';
				btn.innerText = 'Baca Selengkapnya';
			}
		}
	</script>
</body>

</html>
