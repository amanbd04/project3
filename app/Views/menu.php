<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Menu - MyBlog</title>

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
			background-color: rgba(255, 255, 255, 0.08);
			border: none;
			color: #fff;
			backdrop-filter: blur(6px);
			transition: transform 0.2s;
			height: 100%;
		}

		.card:hover {
			transform: scale(1.03);
		}

		.card-title {
			font-weight: bold;
		}
	</style>
</head>

<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() ?>">MyBlog</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item"><a class="nav-link" href="<?= base_url() ?>">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('about') ?>">Menu</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('about') ?>">About</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('post') ?>">Blog</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('contact') ?>">Contact</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('faqs') ?>">FAQ</a></li>
					<li class="nav-item"><a class="nav-link active" href="<?= base_url('menu') ?>">Menu</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Header -->
	<header class="p-5 mb-4 bg-dark bg-opacity-50 rounded-3 text-center">
		<div class="container py-4">
			<h1 class="display-5 fw-bold"><i class="bi bi-cup-hot-fill me-2"></i>Menu Spesial Kami</h1>
			<p class="lead">Nikmati aroma kopi dan cemilan khas yang menggoda lidah.</p>
		</div>
	</header>

	<?php
	function getMenuIcon($nama)
	{
		$icons = [
			'kopi' => 'bi-cup-hot-fill',
			'latte' => 'bi-cup-straw',
			'brew' => 'bi-droplet-half',
			'mocha' => 'bi-cup',
			'espresso' => 'bi-lightning-fill',
			'pandan' => 'bi-flower3',
			'honey' => 'bi-bezier',
			'choco' => 'bi-heart-fill',
			'roti' => 'bi-bagel',
			'donat' => 'bi-emoji-smile',
			'croffle' => 'bi-cloud',
			'brownie' => 'bi-box-fill',
			'tart' => 'bi-cake2-fill',
			'waffle' => 'bi-grid-1x2',
			'banana' => 'bi-emoji-sunglasses',
			'keju' => 'bi-award-fill',
			'garlic' => 'bi-lightbulb'
		];
		foreach ($icons as $key => $icon) {
			if (stripos($nama, $key) !== false) {
				return $icon;
			}
		}
		return 'bi-stars';
	}

	$menus = [
		// Kopi
		['nama' => 'Kopi Nebula', 'deskripsi' => 'Espresso dengan sentuhan karamel dan vanilla.', 'harga' => '28.000'],
		['nama' => 'Brewtella Latte', 'deskripsi' => 'Latte manis dengan hint cokelat hazelnut.', 'harga' => '30.000'],
		['nama' => 'Midnight Black', 'deskripsi' => 'Cold brew extra strong, tanpa ampun.', 'harga' => '32.000'],
		['nama' => 'Sunrise Honey', 'deskripsi' => 'Kopi arabika dengan madu murni.', 'harga' => '29.000'],
		['nama' => 'Cloud Mocha', 'deskripsi' => 'Mocha lembut dengan krim dan marshmallow.', 'harga' => '31.000'],
		['nama' => 'Caramel Dusk', 'deskripsi' => 'Kopi susu dengan sirup karamel dan es batu.', 'harga' => '30.000'],
		['nama' => 'Kopi Rempah Nusantara', 'deskripsi' => 'Racikan kopi lokal dengan kayu manis & cengkeh.', 'harga' => '27.000'],
		['nama' => 'Espresso Volcano', 'deskripsi' => 'Espresso pekat, panas, meledak di mulut.', 'harga' => '26.000'],
		['nama' => 'Iced Sakura Brew', 'deskripsi' => 'Kopi dingin floral ala Jepang.', 'harga' => '33.000'],
		['nama' => 'Kopi Pandan Latte', 'deskripsi' => 'Latte lembut dengan aroma daun pandan.', 'harga' => '30.000'],

		// Makanan
		['nama' => 'Banana Nugget Choco', 'deskripsi' => 'Pisang krispi dengan saus cokelat leleh.', 'harga' => '22.000'],
		['nama' => 'Croissant Keju Meleleh', 'deskripsi' => 'Roti butter flaky dengan keju leleh.', 'harga' => '25.000'],
		['nama' => 'Roti Bakar Kopi Susu', 'deskripsi' => 'Roti panggang klasik dengan olesan kopi susu.', 'harga' => '20.000'],
		['nama' => 'Waffle Berry Bliss', 'deskripsi' => 'Waffle lembut dengan topping buah dan sirup.', 'harga' => '28.000'],
		['nama' => 'Donat Tiramisu', 'deskripsi' => 'Donat isi krim kopi dengan taburan kakao.', 'harga' => '23.000'],
		['nama' => 'Cheesy Garlic Bread', 'deskripsi' => 'Roti panggang bawang putih dan keju mozarella.', 'harga' => '24.000'],
		['nama' => 'Croffle Pandan', 'deskripsi' => 'Croffle renyah dengan aroma pandan legit.', 'harga' => '25.000'],
		['nama' => 'Pisang Karamel Crunch', 'deskripsi' => 'Pisang goreng karamel dan kacang renyah.', 'harga' => '21.000'],
		['nama' => 'Brownie Melt Lava', 'deskripsi' => 'Brownie lembut dengan lelehan cokelat tengah.', 'harga' => '27.000'],
		['nama' => 'Tart Kopi Klasik', 'deskripsi' => 'Mini tart dengan krim kopi arabika.', 'harga' => '26.000'],
	];
	?>

	<!-- Menu Cards -->
	<div class="container mb-5">
		<div class="row g-4">
			<?php foreach ($menus as $menu): ?>
				<?php $icon = getMenuIcon($menu['nama']); ?>
				<div class="col-sm-6 col-lg-4">
					<div class="card h-100 p-3">
						<div class="card-body">
							<h5 class="card-title"><i class="bi <?= $icon ?> me-2"></i><?= $menu['nama'] ?></h5>
							<p class="card-text"><?= $menu['deskripsi'] ?></p>
						</div>
						<div class="card-footer text-end">
							<span class="fw-bold">Rp <?= $menu['harga'] ?></span>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>

	<!-- Footer -->
	<div class="container py-4">
		<footer class="pt-3 mt-4 text-muted border-top text-center">
			&copy; <?= date('Y') ?> MyBlog — Nikmati kopi, temani rasa.
		</footer>
	</div>

	<script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>
