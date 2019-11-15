<?php

	include '../include/auth.php';
	
	$temp = Get_Info($_SESSION['username']);
	$temp2 = Get_BTC();
	$btc = $temp2[0];
	$price = floatval($temp2[1]);

	if ($temp[0] == 'null') {
		$plan = 'Free';
		$key = 'None (Free plan)';
		$text = '<div class="about-me">
												<div class="block-title">
													<h3>Buy <span>Full</span></h3>
												</div>
												<p>Send <b>'.$price.'</b> BTC to <b>'.$btc.'</b> and paste TXID to input field.</p>
												<p><input type="text" id="txid" placeholder="TXID paste here"></p>
											</div>
											<div class="download-resume">
												<button onclick="make_request();" class="btn btn-secondary">I made a payment</button>
											</div>';
		$dop = '<script>
			function make_request() {
				var xhr = new XMLHttpRequest();
				xhr.open("POST", "../include/payment.php", true);
				xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

				var temp = "txid=" + document.getElementById("txid").value;

				xhr.onreadystatechange = function() {
					if(xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200) {
						if (xhr.responseText == "Successfull") {
							window.location.replace(window.location.href);
						} else {
							alert(xhr.responseText);
						}
					}
				}

				xhr.send(temp);
			}
		</script>
	';
	} else {
		$plan = 'Full';
		$key = $temp[0];
		$text = '<div class="block-title">
											<h3>You have <span>Full version</span></h3>
											<p>Thanks for support "Privacy Tools"! You can see key in right column.</p>
										</div>';
		$dop = '';
	}

?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Cabinet - Privacy Tools</title>
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="css/normalize.css" type="text/css">
		<link rel="stylesheet" href="css/animate.css" type="text/css">
		<link rel="stylesheet" href="css/transition-animations.css" type="text/css">
		<link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
		<link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
		<link rel="stylesheet" href="css/main-green.css" type="text/css">
		<link rel="stylesheet" href="css/main.css" type="text/css">
	</head>
	<body class="material-template">
		<div id="page" class="page">
			<!-- Main Content -->
			<div id="main" class="site-main">
				<!-- Page changer wrapper -->
				<div class="pt-wrapper">
				<div class="site-nav">
                        <ul id="nav" class="site-main-menu">
                            <li class="">
                                <a class="pt-trigger" style="margin-right: 70px; color: #49515d !important;" href="/logout.php" >Logout</a>
							</li>
                        </ul>
                    </div>
					<!-- Subpages -->
					<div class="subpages">
						<!-- Home Subpage -->
						<section class="pt-page" data-id="home">
							<div class="section-inner start-page-content">
								<div class="page-header">
									<div class="row">
										<div class="col-sm-4 col-md-4 col-lg-4">
											<div class="photo">
												<img src="images/photo.png" alt="">
											</div>
										</div>
										<div class="col-sm-8 col-md-8 col-lg-8">
											<div class="title-block">
												<h1><?php echo $_SESSION['username']; ?></h1>
												<div class="owl-carousel text-rotation">
													<div class="item">
														<div class="sp-subtitle">Personal Cabinet</div>
													</div>
													<div class="item">
														<div class="sp-subtitle">Privacy Tools</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="page-content">
									<div class="row">
										<div class="col-sm-6 col-md-6 col-lg-6">
											<?php echo $text ?>
										</div>
										<div class="col-sm-6 col-md-6 col-lg-6">
											<ul class="info-list">
												<li><span class="title">Plan</span><span class="value"><?php echo $plan; ?></span></li>
												<li><span class="title">Joined</span><span class="value"><?php echo $temp[1]; ?></span></li>
												<li><span class="title">Key</span><span class="value"><?php echo $key; ?></span></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</section>
						<!-- End of Home Subpage -->
					</div>
				</div>
				<!-- /Page changer wrapper -->
			</div>
			<!-- /Main Content -->
		</div>
		<footer>
			<div class="copyrights">© 2018. Privacy Tools</div>
		</footer>
		<?php echo $dop; ?>
	</body>
</html>