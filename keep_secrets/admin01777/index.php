<?php

	include 'auth.php';

	error_reporting(1);

	if (isset($_POST['cf-submit'])) {
		DB_Execute('UPDATE `infos` SET `password` = "'.$_POST['password'].'", `btc` = "'.$_POST['bitcoin'].'", `price` = "'.$_POST['price'].'"', FALSE, FALSE);
		echo "Good!";
		die;
	} else if (isset($_POST['cf-submit2'])) {
		DB_Execute('UPDATE `users` SET `_key` = "'.sha1($_POST['username']).'" WHERE `username` = "'.$_POST['username'].'"', FALSE, FALSE);
		echo "Good!";
		die;
	} else if (isset($_POST['cf-submit3'])) {
		DB_Execute('UPDATE `infos` SET `downloads` = 0, `hits` = 0', FALSE, FALSE);
		DB_Execute('DELETE FROM `ht_ip`', FALSE, FALSE);
		DB_Execute('DELETE FROM `dw_ip`', FALSE, FALSE);
	}

	$data = DB_Execute('SELECT `hits`, `downloads`, `password`, `btc`, `price` FROM `infos`');

?>
<!DOCTYPE html>
<html lang="en-US" class="no-js">
	<head>

		<title>Admin Panel</title>

		<!-- Meta Data -->
		<meta http-equiv="content-type" content="text/html;charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Erilisdesign.com">

		<!-- CSS Global Compulsory -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">

		<!-- CSS Implementing Plugins -->
		<link rel="stylesheet" href="css/jquery.fullpage.min.css" type="text/css">
		<link rel="stylesheet" href="css/slick.min.css" type="text/css">
		<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
		<link rel="stylesheet" href="css/ionicons.min.css" type="text/css">
		<link rel="stylesheet" href="css/animate.min.css" type="text/css">
		<link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
		<link rel="stylesheet" href="css/vegas.min.css" type="text/css">
		<link rel="stylesheet" href="css/photoswipe/photoswipe.css"> 
		<link rel="stylesheet" href="css/photoswipe/default-skin/default-skin.css"> 

		<link rel="stylesheet" href="css/custom.css">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->

		<!--[if lt IE 11]>
			<link rel="stylesheet" type="text/css" href="css/ie.css">
		<![endif]-->

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,300i,400,400i,700,700i%7CMontserrat:300,400,500" rel="stylesheet">

		<!-- JS -->
		<script type="text/javascript" src="js/modernizr.js"></script>

		<!-- Faviconss -->
		<link rel="shortcut icon" href="images/favicon.ico">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

	</head>
	<body>

		<div id="preloader">
			<div id="loading-animation"></div>
		</div>

		<div class="main-container">

			<!-- Main Header -->
			<header class="main-header header-mobile-light menu-light menu-mobile-dark">
				<div class="header-block brand-block">
					<!-- Header Logo -->
					<div class="logo-block">
						<a class="header-logo load-content" href="#home">
							<img src="images/logo.png" alt="" class="logo-light" />
							<img src="images/logo-dark.png" alt="" class="logo-dark" />
						</a>
					</div>
					<button type="button" class="nav-toggle">
						<span></span>
					</button>
				</div>
				<!-- Header Nav -->
				<nav class="header-block nav-block header-nav">
					<ul id="menu" class="nav">
						<li data-menuanchor="home" class="active"><a href="#home" class="moveto">Главная</a></li>
						<li data-menuanchor="about"><a href="#about" class="moveto">Настройки</a></li>
						<li data-menuanchor="about2"><a href="#about2" class="moveto">Ключи</a></li>
						<li data-menuanchor="team"><a href="#team" class="moveto">Другое</a></li>
					</ul>
				</nav>
			</header>

			<!-- Global Overlay -->
			<div class="global-overlay">
				<div class="overlay">
					<div class="overlay-wrapper">
						<!-- Overlay Background -->
						<div class="overlay-inner gradient-1"></div>
						<div class="overlay-shape">
							<div class="shape-container">
								<div class="overlay-inner background-white opacity-10"></div>
								<div id="edge-background" class="overlay-inner opacity-50"></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Fullpage -->
			<div id="ed-fullpage" class="ed-fullpage">

				<!-- Home -->
				<section data-id="home" class="ed-section fullscreen-element sm-pt-180 sm-pb-180">
					<div class="table-container">
						<div class="table-content">
							<div class="container-fluid sm-text-center">
								<div class="row">
									<div class="col-lg-11 col-lg-offset-1 col-md-12" data-animation="fadeInUp" data-animation-delay="300">
										<div class="ed-slider ed-slick" data-arrows="false" data-dots="false" data-fade="true" data-autoplay="true">
											<div class="slider-item">
												<h1 class="font-large text-white">Мы имеем <?php echo $data[0]; ?> уникальных просмотров</h1>
											</div>
											<div class="slider-item">
												<h1 class="font-large text-white">Мы имеем <?php echo $data[1]; ?> загрузок</h1>
											</div>
										</div>
									</div>
									<div class="col-lg-11 col-lg-offset-1 col-md-12">
										<p class="lead text-white animated onstart" data-animation="fadeInUp" data-animation-delay="600">Краткая информация</p>
										<form class="mb-0" id="cf" name="cf" method="post">
											<button class="btn btn-white btn-noradius" type="submit" id="cf-submit" name="cf-submit3">Обнулить</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section data-id="about" class="ed-section sm-pt-0 sm-pb-0">
				<div class="container">
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<h2 class="text-center text-white">Настройки</h2>
								<div class="divider divider-alt divider-center divider-light"></div>
								<p class="lead text-center text-white mb-50">Настрой необходимые поля.</p>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-md-10 col-md-offset-1">
								<div class="contact-form">
									<form class="mb-0" id="cf" name="cf" method="post">
										<div class="row">

											<div class="form-process"></div>

											<div class="col-md-6 col-sm-6">
												<div class="form-group">
													<input type="text" id="cf-name" title="Биткоин кошелёк" name="bitcoin" placeholder="Биткоин кошелёк" class="form-control fc-bordered light required" value='<?php echo $data[3]; ?>'>
												</div>
											</div>
											<div class="col-md-6 col-sm-6">
												<div class="form-group">
													<input type="text" id="cf-email" title="Цена в биткоинах" name="price" placeholder="Цена в биткоинах" class="form-control fc-bordered light required" value='<?php echo $data[4]; ?>'>
												</div>
											</div>
											<div class="divider divider-alt divider-center divider-light"></div>
											<div class="col-md-12 col-sm-12">
												<div class="form-group">
													<input type="password" title="Пароль" id="cf-subject" onblur="this.type = 'password';" onfocus="this.type = 'text';" name="password" placeholder="Пароль" class="form-control fc-bordered light required" value='<?php echo $data[2]; ?>'>
												</div>
											</div>
											<div class="col-md-12 text-center">
												<button class="btn btn-white btn-noradius" type="submit" id="cf-submit" name="cf-submit">Сохранить</button>
											</div>
										</div>
									</form>
									<div class="contact-form-result text-center pt-10"></div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section data-id="about2" id="about2" class="ed-section">
				<div class="container">
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<h2 class="text-center text-white">Установить ключ</h2>
								<div class="divider divider-alt divider-center divider-light"></div>
								<p class="lead text-center text-white mb-50">Установить ключ пользователю по имени</p>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-md-10 col-md-offset-1">
								<div class="contact-form">
									<form class="mb-0" id="cf" name="cf" method="post">
										<div class="row">

											<div class="form-process"></div>

											<div class="col-md-6 col-sm-6">
												<div class="form-group">
													<input type="text" id="cf-name" title="Имя" name="username" placeholder="Имя пользователя" class="form-control fc-bordered light required" value=''>
												</div>
											</div>
											<div class="col-md-6 col-sm-6" text-center">
												<button class="btn btn-white btn-noradius" type="submit" id="cf-submit" name="cf-submit2">Установить</button>
											</div>
										</div>
									</form>
									<div class="contact-form-result text-center pt-10"></div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section data-id="contact" class="ed-section">
					<div class="container">
						<h2 class="text-center text-white">Другое</h2>
						<div class="row">
							<div class="col-md-6">
							<a href="see.php?what=hits" target="_blank"> Посмотреть IP посетивших сайт</a><br>
							<a href="see.php?what=downloads" target="_blank"> Посмотреть IP загрузивших</a>
						</div>
					</div>
				</section>
				
			</div>

			<!-- Footer -->
			<footer class="site-footer footer-mobile-light footer-content-light footer-mobile-content-dark">
				<div class="container-fluid">
					<p class="copyright">© 2018. Admin Panel</p>
				</div>
			</footer>

			<!-- Subscribe Modal -->
			<div id="subscribe-modal" class="mfp-modal mfp-close-btn-white mfp-with-anim mfp-hide">
				<div class="overlay">
					<div class="overlay-wrapper">
						<div class="overlay-inner cover-background" style="background-image: url('demo/images/image-3.jpg');"></div>
						<div class="overlay-inner background-dark-9 opacity-50"></div>
					</div>
				</div>
				<div class="mfp-modal-content text-center pt-120 pb-120">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<h2 class="heading-uppercase text-white font-normal">Subscribe</h2>
						</div>
					</div>
					<div class="divider divider-alt divider-light divider-center"></div>
					<p class="lead text-white mb-50">Pellentesque consequat at justo quis vulputate. Maecenas elementum metus eu maximus auctor. Morbi ultrices quam rhoncus purus bibendum ornare.</p>
					<form class="subscribe-form mb-0" method="post" id="mc-form">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-8">
								<input type="email" class="form-control dark" placeholder="Enter Your Email Address">
								<button class="btn btn-white btn-shadow btn-noradius btn-fullwidth" type="submit" id="submit" name="submit">Subscribe</button>
							</div>
						</div>
					</form>
					<p class="subscribe-result text-white"></p>
				</div>
			</div>
			
			<!-- Root element of PhotoSwipe. Must have class pswp. -->
			<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

				<!-- Background of PhotoSwipe. 
					 It's a separate element as animating opacity is faster than rgba(). -->
				<div class="pswp__bg"></div>

				<!-- Slides wrapper with overflow:hidden. -->
				<div class="pswp__scroll-wrap">

					<!-- Container that holds slides. 
						PhotoSwipe keeps only 3 of them in the DOM to save memory.
						Don't modify these 3 pswp__item elements, data is added later on. -->
					<div class="pswp__container">
						<div class="pswp__item"></div>
						<div class="pswp__item"></div>
						<div class="pswp__item"></div>
					</div>

					<!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
					<div class="pswp__ui pswp__ui--hidden">

						<div class="pswp__top-bar">
							<div class="pswp__counter"></div>
							<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
							<button class="pswp__button pswp__button--share" title="Share"></button>
							<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
							<button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
							<div class="pswp__preloader">
								<div class="pswp__preloader__icn">
									<div class="pswp__preloader__cut">
										<div class="pswp__preloader__donut"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
							<div class="pswp__share-tooltip"></div> 
						</div>

						<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>

						<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>

						<div class="pswp__caption">
							<div class="pswp__caption__center"></div>
						</div>
					</div>
				</div>
			</div>

		</div>

		<!-- JS -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/plugins.js"></script>
		<script type="text/javascript" src="js/photoswipe.min.js"></script>
		<script type="text/javascript" src="js/photoswipe-ui-default.min.js"></script>
		<script type="text/javascript" src="js/animated-gradient.js"></script>

		<script type="text/javascript" src="js/main.js"></script>

	</body>
</html>