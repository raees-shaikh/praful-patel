<?php
@include_once("analyticstracking.php");
require "../assets/php/config.php";
$db_app = mysqli_connect($servername_app, $username_app, $password_app, $dbname_app);

if (!$db_app) {
	die("Connection failed: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="Praful Patel is a Member of Parliament (Rajyasabha), current President of AIFF & Sr. Vice President of AFC.">
	<meta name="keywords" content="praful patel, praful patel gondia, praful patel civil aviation minister, mp, rajya sabha, aiff, president of aiff, indian football, ges, gondia education">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<!-- Loading: Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,300,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,700,300' rel='stylesheet' type='text/css'>

	<title>Videos - Praful Patel(President of the AIFF, Member of Parliament, Govt. of India, Senior Leader NCP.)</title>

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
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- Loading: Styles -->
	<!--<link rel="stylesheet/less" href="assets/less/style.less" media="screen">-->
	<link rel="stylesheet" href="assets/css/style.css" media="screen">
	<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
	<link rel="stylesheet" type="text/css" href="assets/css/video.css">
	<!-- Loading Modenizr -->
	<script src="assets/js/modernizr.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
	<script src="src/skdslider.min.js"></script>
	<link href="src/skdslider.css" rel="stylesheet">
	<link href="src/custom.css" rel="stylesheet">
	<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery('#demo3').skdslider({
				delay: 5000,
				animationSpeed: 2000,
				showNextPrev: true,
				showPlayButton: true,
				autoSlide: true,
				animationType: 'fading'
			});

			jQuery('#responsive').change(function() {
				$('#responsive_wrapper').width(jQuery(this).val());
				$(window).trigger('resize');
			});

		});
	</script>
	<!--[if lt IE 9]>
		<script src="assets/js/html5.min.js"></script>
		<script src="assets/js/respond.js"></script>
		<![endif]-->
	<style>


	</style>

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
					<li><a href="index"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp;મુખ્ય પૃષ્ઠ<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;More</span></a></li>
					<li><a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;મારા વિશે<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;More</span></a>
						<ul>
							<li><a href="vision"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;દ્રષ્ટિ<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;More</span></a></li>
							<li><a href="educationalist"><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp;કેળવણીકાર <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;More</span></a></li>
							<li><a href="social"><i class="fa fa-handshake-o" aria-hidden="true"></i>&nbsp;સામાજિક પહેલ<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;More</span></a></li>
						</ul>
					</li>
					<li><a href="sports"><i class="fa fa-futbol-o" aria-hidden="true"></i>&nbsp;રમતવીર<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;More</span></a></li>
					<li><a href="leadership"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;નેતૃત્વ<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;More</span></a></li>
					<li class="nav-special"><a href="#"><i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp;ગેલેરી</a>
						<ul>
							<li><a href="photos"><i class="fa fa-camera-retro" aria-hidden="true"></i>&nbsp;ફોટો ગેલેરી</a></li>
							<li><a href="album"><i class="fa fa-play" aria-hidden="true"></i>&nbsp;&nbsp;વિડિઓ ગેલેરી</a></li>
						</ul>
					</li>
					<li><a href="contact"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;સંપર્ક<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;More</span></a></li>
					<li><a href="#"><i class="fa fa-language" aria-hidden="true"></i>&nbsp;ભાષા</a>
							<ul>
								<li><a href="../videos"><img alt="" src="assets/img/gb.png" alt="us">&nbsp;&nbsp;અંગ્રેજી</a></li>
								<li><a href="videos"><img alt="" src="assets/img/in.png" alt="us">&nbsp;&nbsp;ગુજરાતી</a></li>
							</ul>
						</li>
					<!-- <li><a href="https://play.google.com/store/apps/details?id=com.acetrot.prafulpatel&hl=en" target="_blank"><img alt="" src="assets/img/playstore-menu.png" alt="download from playstore" title="Download App from Google Play Store"></a></li>
					<li><a href="https://itunes.apple.com/in/app/praful-patel/id1212795298?mt=8" target="_blank"><img alt="" src="assets/img/applestore-menu.png" alt="download from apple store" title="Download App from Apple Store"></a></li> -->
				</ul>
			</nav>
		</div>
	</header>
	<div class="q-container">
		<div class="q-row">
			<div class="q-col-1-1">
				<ul class="breadcrumb">
					<li>You are here:<a href="index" class="marg">મુખ્ય પૃષ્ઠ</a><span class="marg">/</span><a href="album" class="marg">વિડિઓ</a></li>
					<li>મુલાકાત</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- End: Header -->

	<!-- Start: Main -->

	<main id="main">
		<div class="page-body">
			<section class="section">
				<div class="q-container">
					<div class="row">
						<h2 class="section-headline wow animated fadeInLeft animated center-txt"><?php echo $_GET['name']; ?></h2>
						<?php

						$sql = "SELECT link,caption FROM media1 WHERE albumid=" . $_GET['albumid'] . " AND status=1 AND flag=0";

						$result = mysqli_query($db_app, $sql);
						if (mysqli_num_rows($result) > 0) {
							while ($row = mysqli_fetch_assoc($result)) { ?>
								<div class="q-col-1-4 img-hight">
									<iframe src="<?php echo $row['link']; ?>&showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe><br><span class="center-txt" "><?php echo $row['caption']; ?></span>
					</div><?php
							}
						} else {
							echo "No Records Found.";
						}

						mysqli_close($db_app);

							?>
					</div>
					</div>
				</section>
			</div>
		</main>
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
					<p class="footer-info">© <?php echo date("Y"); ?> Praful Patel All Rights Reserved. | Designed & Developed By
					<a href="https://www.acetrot.com/" target="_blank" class="acetrot">Acetrot</a></p>
				</div>
				<div class="q-col-1-2 footer-pad">
					<a href="privacy-policy" class="footer-info foo foo1 prvcy">Privacy Policy
					</a>
				</div>
			</div>
		</div>
	</footer>
	<!-- <script src="assets/js/jquery-1.11.1.min.js"></script> -->
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

	<!-- Loading: Custom Scripts -->
	<script src="assets/js/custom.electoral.js"></script>
</body>

</html>