<?php 
@include_once("analyticstracking.php"); 
require "./assets/php/config.php";
$s = false;

function old($key, $default = null) 
{
	$s = $GLOBALS['s'];
	echo (!$s ? (isset($_POST[$key]) ? $_POST[$key] : null ) : null );
}

?>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<!-- Loading: Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,300,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,700,300' rel='stylesheet' type='text/css'>

	<title>Contact - Praful Patel</title>

	<!-- Loading: Normalize, Grid -->
	<link rel="apple-touch-icon" sizes="57x57" href="assets/img/icon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="assets/img/icon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/img/icon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/icon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/img/icon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="assets/img/icon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="assets/img/icon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="assets/img/icon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="assets/img/icon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/img/icon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/icon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/img/icon/favicon-16x16.png">
	<link rel="stylesheet" href="assets/css/normalize.css" media="screen">
	<link rel="stylesheet" href="assets/css/grid.css" media="screen">

	<!-- Loading: Extra Stylesheets -->
	<link rel="stylesheet" href="assets/css/animate.min.css" media="screen">

	<link rel="stylesheet" href="assets/js/plugins/owl-carousel/owl.carousel.css" media="screen">
	<link rel="stylesheet" href="assets/js/plugins/owl-carousel/owl.theme.css" media="screen">
	<link rel="stylesheet" href="assets/js/plugins/owl-carousel/owl.transitions.css" media="screen">

	<link rel="stylesheet" href="assets/js/plugins/easy-responsive-tabs/easyresponsivetabs.css" media="screen">

	<link rel="stylesheet" href="assets/js/plugins/magnific-popup/jquery.magnific-popup.css" media="screen">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
	<link rel="stylesheet" type="text/css" href="assets/css/contact-css.css">
	<!-- Loading: Styles -->
	<!--<link rel="stylesheet/less" href="assets/less/style.less" media="screen">-->
	<link rel="stylesheet" href="assets/css/style.css" media="screen">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Loading Modenizr -->
	<script src="assets/js/modernizr.min.js"></script>
	<!--[if lt IE 9]>
		<script src="assets/js/html5.min.js"></script>
		<script src="assets/js/respond.js"></script>
		<![endif]-->
	<style>
		.succdiv{
			color:green !important;
		}
	</style>

	<script>
		$(document).ready(function() {
			$('.maps').click(function() {
				$('.maps iframe').css("pointer-events", "auto");
			});

			$(".maps").mouseleave(function() {
				$('.maps iframe').css("pointer-events", "none");
			});
		});
	</script>

	<script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body class="home">

	<!-- Start: Header -->
	<header id="header">
		<div class="q-container">
			<div id="logo">
				<a href="index"><img alt="" src="assets/img/praful-patel-logo.png" alt=""></a>
			</div>

			<nav id="nav" class="navv">
				<a href="#" id="nav-toggle" title="Navigation"><i class="fa fa-bars fa-2x"></i></a>
				<ul>
					<li><a href="index"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp;Home<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;More</span></a></li>
					<li><a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;About<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;More</span></a>
						<ul>
							<li><a href="vision"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;Vision<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;More</span></a></li>
							<li><a href="educationalist"><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp;Educationalist <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;More</span></a></li>
							<li><a href="social"><i class="fa fa-handshake-o" aria-hidden="true"></i>&nbsp;Social Initiatives<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;More</span></a></li>
						</ul>
					</li>
					<li><a href="sports"><i class="fa fa-futbol-o" aria-hidden="true"></i>&nbsp;Sports<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;More</span></a></li>
					<li><a href="leadership"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Leadership<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;More</span></a></li>
					<li><a href="#"><i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp;Gallery</a>
						<ul>
							<li><a href="photos"><i class="fa fa-camera-retro" aria-hidden="true"></i>&nbsp;Photos</a></li>
							<li><a href="album"><i class="fa fa-play" aria-hidden="true"></i>&nbsp;&nbsp;Videos</a></li>
						</ul>
					</li>
					<li class="nav-special"><a href="contact"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;Contact<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;More</span></a></li>
					<li><a href="contact"><i class="fa fa-language" aria-hidden="true"></i>&nbsp;Language</a>
						<ul>
							<li><a href="contact"><img alt="" src="assets/img/gb.png" alt="us">&nbsp;&nbsp;English</a></li>
							<li><a href="gj/contact"><img alt="" src="assets/img/in.png" alt="us">&nbsp;&nbsp;Gujarati</a></li>
						</ul>
					</li>
					<!-- <li><a href="https://play.google.com/store/apps/details?id=com.acetrot.prafulpatel&hl=en" target="_blank"><img alt="" src="assets/img/playstore-menu.png" alt="download from playstore" title="Download App from Google Play Store"></a></li>
					<li><a href="https://itunes.apple.com/in/app/praful-patel/id1212795298?mt=8" target="_blank"><img alt="" src="assets/img/applestore-menu.png" alt="Download App from Apple Store" title="Download App from Apple Store"></a></li> -->
				</ul>
			</nav>
		</div>
	</header>
	<div class="q-container">
		<div class="q-row">
			<div class="q-col-1-1">
				<ul class="breadcrumb">
					<li>You are here:<a href="index" class="marg">Home</a></li>
					<li>Contact</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- End: Header -->

	<!-- Start: Main -->
	<main id="main">
		<div class="page-body">
			<div class="q-container">
				<div class="q-row">
					<div class="content q-col-2-3 wow animated fadeIn" data-wow-delay="0.2s" data-wow-duration="0.5s">
						<?php
						$statusMsg = '';
						$msgClass = '';
						if (isset($_POST['submit']) && !empty($_POST['submit'])) {
							$email = $_POST['email'];
							$name = $_POST['name'];
							$num = $_POST['number'];
							$subject = "Contact Us Page";
							$message = $_POST['message'];
							$captcha_res = $_POST['g-recaptcha-response'];

							$captcha = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . SITE_SECRET . '&response=' . $captcha_res);
							$captcha = json_decode($captcha);
							if (!$captcha->success) {
								$statusMsg = 'Captcha is invalid.';
								$msgClass = 'errordiv';
							}

							// Check whether submitted data is not empty
							if (!empty($email) && !empty($name) && !empty($subject) && !empty($message) && !empty($captcha_res)) {

								if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
									$statusMsg = 'Please enter your valid email.';
									$msgClass = 'errordiv';
								}
								if (strlen($num) < 10) {
									$statusMsg = 'Invalid mobile number.';
									$msgClass = 'errordiv';
								}
								// else
								// {
								// Recipient email
								$toEmail = TO_EMAIL;

								$emailSubject = 'Contact Request Submitted by ' . $name;
								$htmlContent = '<h2>Message From Website</h2>

												<table>
												    <tr>
												        <td>Name: </td>
												        <td>'.ucfirst($name).'</td>
												    </tr>
												    <tr>
												        <td>Email: </td>
												        <td>'.$email.'</td>
												    </tr>
												    <tr>
												        <td>Phone: </td>
												        <td>
									                        <a href="#">'.$num.'</a>
									                    </td>
												    </tr>
												    <tr>
												        <td>Subject: </td>
												        <td>'.$subject.'</td>
												    </tr>
												    
												    <tr>
												        <td>Message: </td>
												        <td>'.$message.'</td>
												    </tr>
												    
												</table>
												';



								// // Set content-type header for sending HTML email
								// $headers = "MIME-Version: 1.0" . "\r\n";
								// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

								// // Additional headers
								// $headers .= 'From: ' . $email . '\r\n';
								// $headers .= 'X-Mailer: PHP/' . phpversion();

								$headers = "MIME-Version: 1.0" . "\r\n";
							    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
							    $headers .= 'From: ' . $email . "\r\n";
							    $headers .= 'Reply-To: ' .$email . "\r\n";
							    $headers .= 'X-Mailer: ' . $name;

								if (mail($toEmail, $emailSubject, $htmlContent, $headers)) {
									$statusMsg = 'Thank You For Contacting us !';
									$msgClass = 'succdiv';
									$s = true;
									// unset($_REQUEST);
								} else {
									$statusMsg = 'Your contact request submission failed, please try again.';
									$msgClass = 'errordiv';
								}
							} else {
								$statusMsg = 'Please fill all the fields.';
								$msgClass = 'errordiv';
							}


					
						}
						?>
						<div class="mainContent">
							<div class="contactFrm">

								<form id="form-contact" name="form-contact" class="note" method="post" action="">

									<div class="q-row">
										<div class="q-col-1-1 col-padd">
											<label for="name">What's Your Name? <span class="required">*</span></label><br>
											<input type="text" name="name" id="name" class="full-width" value="<?php old('name'); ?>" required>
										</div>
										<div class="q-col-1-1 col-padd">
											<label for="name">What's Your E-mail? <span class="required">*</span></label><br>
											<input type="email" name="email" id="email" class="full-width" value="<?php old('email'); ?>" required>
										</div>
										<div class="q-col-1-1 col-padd">
											<label for="name">What's Your Mobile? <span class="required">*</span></label><br>
											<input maxlength="10" type="text" name="number" id="number" class="full-width" value="<?php old('number'); ?>" required>
										</div>
									</div>
									<div class="q-row col-padd">
										<div class="q-col-1-1">
											<label for="name">Your Message <span class="required">*</span></label><br>
											<textarea name="message" id="message" class="full-width" rows="4" required><?php old('message'); ?></textarea>
										</div>
									</div>
									<div class="g-recaptcha q-col-1-1" data-sitekey="<?php echo SITE_KEY; ?>"></div><br>
									<div class="q-row row-pad col-padd">
										<div class="q-col-1-4 rw-pd">
											<input type="submit" name="submit" value="Submit" class="button button-submit full-width"><br>
											<!-- <a href="#" id="submit-contact"><i class="fa fa-envelope"></i> Submit your message</a> -->
										</div>
									</div>
									<div class="q-row row-pad col-padd text-center">
										<?php if (!empty($statusMsg)) { ?>
												<p class="err-msg statusMsg <?php echo !empty($msgClass) ? $msgClass : ''; ?>"><?php echo $statusMsg; ?></p>
										<?php } ?>
									</div>
								</form>
							</div>
						</div>
					</div>

					<aside id="sidebar" class="q-col-1-3 side-pad1 wow animated fadeIn" data-wow-delay="0.4s" data-wow-duration="0.5s">
						<div class="widget box box-alt">
							<h4 class="box-headline">Address</h4>
							<!-- <h4 style="color: #fff;">Ceejay House,</h4> -->
							<p class="no-margin">26, Gurudwara Rakabganj Road,New Delhi - 110001</p>
							<h4 class="box-headline">Contact</h4>
							<p class="no-margin"><a href="tel:+911123712317" class="clr-wh">+91-1123712317</a></p>
							<h4 class="box-headline">Email</h4>
							<p class="no-margin"><a href="mailto:<?php echo TO_EMAIL; ?>" class="clr-wh">info@praful-patel.com</a></p>
						</div>
					</aside>
					<div class="q-col-1-3 side-pad">
						<a href="#"><img src="assets/img/contact-praful-patel.jpg"></a>
					</div>
				</div>
			</div>
		</div>
	</main>
	<div class="q-container center-txt maps-new">
		<div class="q-row">
			<div class="q-col-1-1">
				<div class='embed-container maps'>
					<iframe width='100%' height='300' frameborder='0' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.316863054461!2d77.20352641508877!3d28.620263982422706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce2ad0879e8d3%3A0x8e7ce002997415ce!2sGurudwara+Rakabganj+Road%2C+Pandit+Pant+Marg+Area%2C+Sansad+Marg+Area%2C+New+Delhi%2C+Delhi+110001!5e0!3m2!1sen!2sin!4v1496643542952"> </iframe>
				</div>
			</div>
		</div>
	</div>
	<!-- End: Main -->

	<!-- Start: Footer -->
	<footer id="footer">
		<div class="q-container">
			<div class="q-row top-pad">
				<div class="q-col-1-4 footer-col">
					<h2 class="hding-clr">Links</h2>
					<nav id="nav-footer-primary">
						<ul>
							<li><a href="index">Home</a></li><br>
							<li><a href="about">About</a></li><br>
							<li><a href="sports">Sports</a></li><br>
							<li><a href="vision">Vision</a></li><br>
							<li><a href="leadership">Leadership</a></li>
						</ul>
					</nav>
				</div>
				<div class="q-col-1-4 footer-col footer-col2">
					<nav id="nav-footer-primary">
						<ul>
							<li><a href="educationalist">Educationalist</a></li><br>
							<li><a href="social">Social Initiatives</a></li><br>
							<li><a href="contact">Contact</a></li><br>
						</ul>
					</nav>
				</div>
				<div class="q-col-1-4">
					<a href="#" class="footer-logo"><img alt="" src="assets/img/praful-patel-logo.png" alt=""></a>
					<ul class="social-profiles social-ul">
						<li><a href="https://www.facebook.com/ShriPrafulPatel" title="Facebook" class="social-space" target="_blank"><img alt="" src="assets/img/facebook-logo.png"></a></li>
						<li><a href="https://twitter.com/praful_patel/" title="Twitter" class="social-space" target="_blank"><img alt="" src="assets/img/twitter-logo.png"></a></li>
						<li><a href="https://www.youtube.com/user/shriprafulpatel" title="YouTube" class="social-space" target="_blank"><img alt="" src="assets/img/youtube-logo.png"></a></li>
					</ul>
				</div>
				<!-- <div class="q-col-1-4 center-txt down-app">
					<h2 class="hding-clr">Download App:</h2>
					<ul class="social-profiles" class="inlin">
						<li class="inlin"><a href="https://play.google.com/store/apps/details?id=com.acetrot.prafulpatel&hl=en" target="_blank">&nbsp;&nbsp;<img alt="" src="assets/img/googleplaystore.png" height="56px" width="170px" alt="Google playstore" title="Download App from Google Play Store"></a></li>
						<li class="inlin"><a href="https://itunes.apple.com/in/app/praful-patel/id1212795298?mt=8" target="_blank" title="Download App from Apple Store"><img alt="" src="assets/img/applelogo.png" height="54px" width="170px" alt="itunes"></a></li>
					</ul>
				</div> -->
			</div>
			<div class="q-container cpy-cont">
				<div class="q-col-1-2 foo2 footer-pad">
				<p class="footer-info">© <?php echo date("Y"); ?> Praful Patel All Rights Reserved.   | Designed & Developed By
				<a href="https://www.acetrot.com/" target="_blank" class="acetrot">Acetrot</a></p>
				</div>
				<div class="q-col-1-2 footer-pad">
					<a href="privacy-policy" class="footer-info foo foo1 prvcy">Privacy Policy
					</a>
				</div>
			</div>
		</div>
	</footer>
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
	<Script src="assets/js/jquery-ui.min.js"></script>
	<script src="assets/js/less-1.7.3.min.js"></script>
	<script src="assets/js/plugins/jquery.hoverintent.min.js"></script>
	<script src="assets/js/plugins/jquery.superfish.min.js"></script>
	<script src="assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
	<script src="assets/js/plugins/easy-responsive-tabs/easyresponsivetabs.js"></script>
	<script src="assets/js/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/plugins/jquery.mixitup.min.js"></script>
	<script src="assets/js/plugins/jquery.fitvids.js"></script>
	<script src="assets/js/plugins/jquery.mousewheel.min.js"></script>
	<script src="assets/js/plugins/jquery.simplr.smoothscroll.min.js"></script>
	<script src="assets/js/plugins/wow.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js"></script>

	<!-- Loading: Custom Scripts -->
	<script src="assets/js/custom.electoral.js"></script>
</body>

</html>