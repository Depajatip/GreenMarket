<!DOCTYPE html>
<html>

<head>
	<title>Welcome To Green Mart</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body id="body">
	<div id="header">
		<nav class="navbar navbar-expand-lg fixed-top" style="background-color: white;">
			<div class="container">
				<img src="<?php echo base_url('assets/img/logoGM.png'); ?>" style="height: 30px; margin-right: 20px;"
					alt="">
				<a class="navbar-brand fw-bold" style="font-size: 20px;" href="#halamanHome">GreenMarket</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
					<ul class="navbar-nav" style="gap: 20px">
						<li class="nav-item"><a class="nav-link active" href="#halamanHome">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="#halamanProduct">Product</a></li>
						<li class="nav-item"><a class="nav-link" href="#halamanBlog">Blog</a></li>
						<li class="nav-item"><a class="nav-link" href="#halamanAboutUs">About</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>

	<div id="halamanKeseluruhan">

		<section id="halamanHome">
			<div class="container">
				<div class="row align-items-center">
					<!-- Left Content -->
					<div class="col-md-6 text-center text-md-start">
						<h1 class="display-5 fw-bold">
							Lessons and insights <br>
							<span class="text-success">from 8 years</span>
						</h1>
						<p class="text-muted mt-3">
							Where to grow your business as a photographer: site or social media?
						</p>
						<div class="mt-4">
							<a href="#" class="btn btn-success me-2">Log in</a>
							<a href="#" class="btn btn-outline-secondary">Register</a>
						</div>
					</div>
					<!-- Right Image -->
					<div class="col-md-6 text-center" style="padding-left: 225px;">
						<img src="assets/img/cart.png" alt="Cart Image" class="hero-img">
					</div>
				</div>
			</div>
		</section>

		<section id="halamanProduct">
			<div class="row">
				<div class="d-flex flex-column justify-content-center align-items-center"
					style="margin-top: 120px; margin-bottom: 100px; gap: 30px;">
					<h4 class="fw-bold">Product</h4>
					<span>We offer a wide range of affurdable and high quality product to suit your everyday needs
						!!!</span>
				</div>
			</div>
			<section id="portfolio" class="portfolio section">
				<div class="portfolio__container bd-grid">
					<!-- Portfolio Item 1 -->
					<div class="portfolio__item">
						<div class="portfolio__img">
							<img src="assets/img/baju.png" alt="Project 1">
							<div class="portfolio__link">
								<a href="/gallery.html" class="portfolio__link-name">View details</a>
							</div>
						</div>
						<div class="portfolio__desc">
							<p></p>
						</div>
					</div>

					<!-- Portfolio Item 2 -->
					<div class="portfolio__item">
						<div class="portfolio__img">
							<img src="assets/img/komputer.png" alt="Project 2">
							<div class="portfolio__link">
								<a href="/gallery.html" class="portfolio__link-name">View details</a>
							</div>
						</div>
						<div class="portfolio__desc">
							<p></p>
						</div>
					</div>

					<!-- Portfolio Item 3 -->
					<div class="portfolio__item">
						<div class="portfolio__img">
							<img src="assets/img/aksesoris.png" alt="Project 3">
							<div class="portfolio__link">
								<a href="/gallery.html" class="portfolio__link-name">View details</a>
							</div>
						</div>
						<div class="portfolio__desc">
							<p></p>
						</div>
					</div>

					<!-- Portfolio Item 4 -->
					<div class="portfolio__item">
						<div class="portfolio__img">
							<img src="assets/img/food.png" alt="Project 4">
							<div class="portfolio__link">
								<a href="/gallery.html" class="portfolio__link-name">View details</a>
							</div>
						</div>
						<div class="portfolio__desc">
							<p></p>
						</div>
					</div>
				</div>
			</section>
		</section>

		<section id="halamanBlog">
			<div class="container">
				<div class="row align-items-center">

					<!-- Kolom kiri: teks promo -->
					<div class="col-md-6">
						<h2 class="text-success fw-bold">SUPER SALE !</h2>
						<p class="fw-semibold">
							Nike continues to lead with its signature blend of comfort, innovation, and
							timeless design. Whether you’re on the move or off-duty, this latest collection
							offers versatile style and all-day support. Now available at special prices for a
							limited time. A perfect opportunity to elevate your everyday footwear with trusted
							quality and performance.
						</p>
						<p class="fw-bold mt-3">Add to cart now or cry later!
							<button class="btn btn-outline-success" style="margin-left: 15px;">
								🛒
							</button>
						</p>
						<img src="assets/img/logonike.png" alt="Nike Logo" class="brand-logo">
					</div>

					<div class="col-md-6 text-center" style="padding-left: 200px; padding-right: 0px;">
						<p class="text-success fw-bold" style="font-size: 50px; margin-bottom: 0px;">30% OFF</p>
						<img src="assets/img/spatu.png" alt="Nike Air Force 1" class="product-img">
						<p class="fw-semibold" style="margin-top: 60px;">Nike Air Force 1</p>
					</div>
				</div>
			</div>
		</section>


		<section id="halamanAboutUs">
			<div class="container">
				<div class="row w-100">
					<div class="col-md-9 d-flex flex-column justify-content-center align-items-center text-center">
						<h4 class="fw-bold">About Us</h4>
						<p>
							GreenMarket is an e-commerce platform offering eco-friendly and sustainable products.
							We are committed to providing quality goods from producers who care about the environment.
							By shopping with us, you support a green lifestyle and help create a better future.
							We believe that every small choice matters, and through our carefully selected products,
							we aim to make sustainable living easy and accessible.
							Join GreenMarket today and be part of the movement to protect our planet.
						</p>
						<div id="icon-row">
							<a href="#"><i class="fab fa-instagram fa-2x" style="color:#E1306C;"></i></a>
							<a href="#"><i class="fab fa-whatsapp fa-2x" style="color:#25D366;"></i></a>
							<a href="#"><i class="far fa-envelope fa-2x" style="color:#EA4335;"></i></a>
							<a href="#"><i class="fab fa-github fa-2x" style="color:#000;"></i></a>
						</div>
					</div>

					<div class="col-md-3">
						<img src="assets/img/cart2.png" alt="Cart Image" class="hero-img"
							style="margin-left: 50px;width: 400px;display: block;margin-top: 50px;">
					</div>
				</div>
			</div>
		</section>

		<footer id="halamanFooter">
			<div class="row" style="height: 100%;">
				<div class="col-md-5">
					<div style="display: flex;align-items: center;justify-content: center;margin-top: 62px">
						<img src="<?php echo base_url('assets/img/logoGM.png'); ?>"
							style="height: 30px; margin-right: 20px;" alt="">
						<h5 class="fw-bold" style="color: white; margin-bottom: 0px;">GreenMarket</h5>
					</div>
					<div style="margin-top: 50px;justify-content: center;display: flex; margin-left: 43px;">
						<p style="color: #cfd4d8;" style="font-size: 6px;">Copyright © 2020 Landify UI Kit.<br>All
							rights
							reserved</p>
					</div>
					<div class="social-icons">
						<a href="#" class="icon"><i class="fab fa-instagram"></i></a>
						<a href="#" class="icon"><i class="fab fa-dribbble"></i></a>
						<a href="#" class="icon"><i class="fab fa-twitter"></i></a>
						<a href="#" class="icon"><i class="fab fa-youtube"></i></a>
					</div>
				</div>
				<div class="col-md-3">
					<div style="display: flex;align-items: center;justify-content: center;margin-top: 40px">
						<div class="company-section">
							<h5>Menu</h5>
							<ul>
								<li style="margin-top: 40px"><a href="#halamanHome">Home</a></li>
								<li><a href="#halamanProduct">Product</a></li>
								<li><a href="#halamanBlog">Blog</a></li>
								<li><a href="#halamanAboutUs">About</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div style="display: flex;align-items: center;justify-content: center;margin-top: 40px">
						<div class="feedback">
							<h5>Feedback</h5>
							<input type="text" placeholder="Enter Feedback . . ."
								style="padding-left: 30px; width: 230px;">
							<p>rate our website:</p>
							<div class="rate-icons">
								<a href="#" class="icon-rate"><i class="fa-solid fa-face-angry"></i></a>
								<a href="#" class="icon-rate"><i class="fa-solid fa-face-frown"></i></a>
								<a href="#" class="icon-rate"><i class="fa-solid fa-face-meh"></i></a>
								<a href="#" class="icon-rate"><i class="fa-solid fa-face-smile"></i></a>
								<a href="#" class="icon-rate"><i class="fa-solid fa-face-laugh"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
	crossorigin="anonymous"></script>

</html>