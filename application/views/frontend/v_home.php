<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Home Five - Drubo</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>theme/images/tapsel.png">
	<!-- Place favicon.ico in the root directory -->

	<!-- All css files are included here. -->
	<!-- Bootstrap fremwork main css -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/new/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/new/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/new/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/new/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/new/css/animate.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/new/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/new/css/meanmenu.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/new/style.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/new/css/responsive.css">
	<script src="<?php echo base_url() ?>assets/frontend/new/js/vendor/modernizr-2.8.3.min.js"></script>
	<style>
		.tulisan {

			color: #f5f5f5;
			text-shadow: 1px 1px 1px #919191,
				1px 2px 1px #919191,
				1px 3px 1px #919191,
				1px 4px 1px #919191,
				1px 5px 1px #919191,
				1px 6px 1px #919191,
				1px 7px 1px #919191,
				1px 8px 1px #919191,
				1px 9px 1px #919191,
				1px 10px 1px #919191,
				1px 18px 6px rgba(16, 16, 16, 0.4),
				1px 22px 10px rgba(16, 16, 16, 0.2),
				1px 25px 35px rgba(16, 16, 16, 0.2),
				1px 30px 60px rgba(16, 16, 16, 0.4);
		}
	</style>
	<?php
	function batas_kata($string, $bataskata)
	{
		$kata = explode(" ", $string);
		return implode(" ", array_splice($kata, 0, $bataskata));
	}
	?>
	<!-- Modernizr JS -->

</head>

<body>
	<!-- header start -->
	<header>
		<div class="header-top-area black-bg hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<ul class="top-right">
							<li>
								<i class="fa fa-envelope"></i>
								<span>Support@mail.com</span>
							</li>
							<li>
								<i class="fa fa-phone"></i>
								<span>+01 1800 453 7678</span>
							</li>
						</ul>
					</div>
					<div class="col-md-6 col-sm-6 hidden-xs">
						<div class="header-icon floatright">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-youtube"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- main-menu-area-start -->
		<div class="main-menu-area black-half-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-2">
						<div class="logo">
							<p class="text-white " style="font-size:20px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif" href="index.html"><img width="30" src="<?php echo base_url() ?>assets/frontend/new/img/logo/tapsel.png" alt="" />
								BAGIAN PEMBANGUNAN
							</p>

						</div>
					</div>
					<div class="col-md-9 col-sm-10">
						<div class="main-menu floatright">
							<nav>
								<ul>
									<li><a href="#" class="text-white">Home</a></li>
									<li><a href="#" class="text-white">about</a></li>
									<li><a href="#" class="text-white">service</a></li>
									<li><a href="#" class="text-white">Portfolio</a></li>
									<li><a href="#" class="text-white">team</a></li>
									<li><a href="#" class="text-white">contact</a></li>
								</ul>
							</nav>
						</div>
						<div class="mobile-menu-area"></div>
					</div>
				</div>
			</div>
		</div>
		<!-- main-menu-area-end -->
	</header>

	<div class="slider-area">
		<div class="slider-active owl-carousel">
			<?php foreach ($slider->result() as $row) : ?>
				<div class="single-slider ptb-120 bg-opacity" style="background-image:url(<?php echo base_url() . 'assets/images/' . $row->slider_gambar; ?>)">
					<div class="container">
						<div class="slider-text">
							<h1 class="tulisan">SEKRETARIAT DAERAH<br> Kabupaten Tapanuli Selatan</h1>
							<h2 class="text-white pt-15"><?php echo $row->slider_judul; ?></h2>
							<p><?php echo limit_words($row->slider_isi, 20) . '...'; ?></p>
							<p><i class="fa fa-clock-o"></i> <?php echo date("d F Y", strtotime($row->slider_tanggal)) ?>
								<i class="fa fa-user ml-40"></i> author : <?php echo $row->slider_author ?></p>
							<a class="active" href="#slider_slug">View features</a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
	<!-- service-area-start -->
	<div class="service-area pt-80 pb-30">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-3 col-md-6">
					<div class="section-title text-center">
						<h2>Services</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="single-service text-center mb-70">
						<div class="service-icon">
							<i class="fa fa-image"></i>
						</div>
						<div class="service-text">
							<h4>Creative ideas</h4>
							<p> Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet accusam. </p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="single-service text-center mb-70">
						<div class="service-icon">
							<i class="fa fa-lightbulb-o"></i>
						</div>
						<div class="service-text">
							<h4>Creative ideas</h4>
							<p> Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet accusam. </p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="single-service text-center mb-70">
						<div class="service-icon">
							<i class="fa fa-code"></i>
						</div>
						<div class="service-text">
							<h4>Pixel Perfect design</h4>
							<p> Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet accusam. </p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="single-service text-center mb-70">
						<div class="service-icon">
							<i class="fa fa-code"></i>
						</div>
						<div class="service-text">
							<h4>Pixel Perfect design</h4>
							<p> Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet accusam. </p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<footer>
		<div class="footer-area black-bg ptb-80">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-4">
						<div class="footer-widget md-30">
							<div class="footer-img">
								<a class="text-white" href="#"><img width="30" src="<?php echo base_url() ?>assets/frontend/new/img/logo/tapsel.png" alt="" /> BAGIAN PEMBANGUNAN</a>
							</div>
							<div class="footer-address">
								<p>We create themes and templates with bootstrap framework.</p>
							</div>
							<div class="address">
								<ul class="list-unstyled contact">
									<li>
										<p><strong><i class="fa fa-map-marker"></i> </strong> vaisahali, jaipur, 302012</p>
									</li>
									<li>
										<p><strong><i class="fa fa-envelope"></i></strong> <a href="#">Support@domain.com</a></p>
									</li>
									<li>
										<p><strong><i class="fa fa-phone"></i></strong> +91 1800 2345 2132</p>
									</li>
									<li>
										<p><strong><i class="fa fa-print"></i> </strong> 1800 2345 2132</p>
									</li>
									<li>
										<p><strong><i class="fa fa-skype"></i> </strong> jondoe001</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="widget mb-30">
							<div class="widget-title">
								<h4>Popular Posts</h4>
								<ul class="posts-list">
									<li>
										<div class="list-img">
											<a href="#"><img src="<?php echo base_url() ?>assets/frontend/new/img/footer/1.jpg" alt="" /></a>
										</div>
										<h5><a href="#">Dolores labore quod.</a></h5>
										<span>Jan 08, 2016</span>
									</li>
									<li>
										<div class="list-img">
											<a href="#"><img src="<?php echo base_url() ?>assets/frontend/new/img/footer/2.jpg" alt="" /></a>
										</div>
										<h5><a href="#">Dolores labore ipsum quod.</a></h5>
										<span>Jan 08, 2018</span>
									</li>
									<li>
										<div class="list-img">
											<a href="#"><img src="<?php echo base_url() ?>assets/frontend/new/img/footer/3.jpg" alt="" /></a>
										</div>
										<h5><a href="#">Dolores labore ipsum</a></h5>
										<span>Jan 01, 2016</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4 hidden-sm">
						<div class="widget mb-30">
							<div class="widget-title">
								<h4>Tagcloud</h4>
								<div class="tagcloud">
									<a href="#">Design</a>
									<a href="#">Develop</a>
									<a href="#">Seo</a>
									<a href="#">jQuery</a>
									<a href="#">Wordpress</a>
									<a href="#">Angular</a>
									<a href="#">Node</a>
									<a href="#">Express</a>
									<a href="#">Gulp</a>
									<a href="#">Sass</a>
									<a href="#">Bootstrap</a>
									<a href="#">Html5</a>
									<a href="#">Css3</a>
									<a href="#">Node</a>
									<a href="#">Retina</a>
									<a href="#">Sprites</a>
									<a href="#">Html5</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="widget ">
							<div class="widget-title">
								<h4>Latest Work</h4>
								<div class="rows">
									<ul class="Flickr-list">
										<li>
											<a href="#"><img src="<?php echo base_url() ?>assets/frontend/new/img/portfolio/img-1.jpg" alt="" /></a>
										</li>
										<li>
											<a href="#"><img src="<?php echo base_url() ?>assets/frontend/new/img/portfolio/img-2.jpg" alt="" /></a>
										</li>
										<li>
											<a href="#"><img src="<?php echo base_url() ?>assets/frontend/new/img/portfolio/img-3.jpg" alt="" /></a>
										</li>
										<li>
											<a href="#"><img src="<?php echo base_url() ?>assets/frontend/new/img/portfolio/img-4.jpg" alt="" /></a>
										</li>
										<li>
											<a href="#"><img src="<?php echo base_url() ?>assets/frontend/new/img/portfolio/img-5.jpg" alt="" /></a>
										</li>
										<li>
											<a href="#"><img src="<?php echo base_url() ?>assets/frontend/new/img/portfolio/img-6.jpg" alt="" /></a>
										</li>
										<li>
											<a href="#"><img src="<?php echo base_url() ?>assets/frontend/new/img/portfolio/img-7.jpg" alt="" /></a>
										</li>
										<li>
											<a href="#"><img src="<?php echo base_url() ?>assets/frontend/new/img/portfolio/img-8.jpg" alt="" /></a>
										</li>
										<li>
											<a href="#"><img src="<?php echo base_url() ?>assets/frontend/new/img/portfolio/img-9.jpg" alt="" /></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom-area">
			<div class="container">
				<div class="social-icons text-center">

				</div>
				<div class="copyright text-white text-left pt-10">
					<p>Pemerintah Kabupaten Tapanuli Selatan - 2019 ©
						<a href="#">Sekretarat Daerah</a>
				</div>
			</div>
		</div>
	</footer>

	<!-- all js here -->
	<script src="<?php echo base_url() ?>assets/frontend/new/js/vendor/jquery-1.12.0.min.js"></script>
	<script src="<?php echo base_url() ?>assets/frontend/new/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/frontend/new/js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url() ?>assets/frontend/new/js/jquery.meanmenu.js"></script>
	<script src="<?php echo base_url() ?>assets/frontend/new/js/jquery.mixitup.min.js"></script>
	<script src="<?php echo base_url() ?>assets/frontend/new/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url() ?>assets/frontend/new/js/jquery.counterup.min.js"></script>
	<script src="<?php echo base_url() ?>assets/frontend/new/js/animate.js"></script>
	<script src="<?php echo base_url() ?>assets/frontend/new/js/waypoints.min.js"></script>
	<script src="<?php echo base_url() ?>assets/frontend/new/js/plugins.js"></script>
	<script src="<?php echo base_url() ?>assets/frontend/new/js/main.js"></script>
</body>

</html>