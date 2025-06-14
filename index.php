<?php
// session_start();
@include_once("analyticstracking.php");
require "./assets/php/config.php";

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

	<title>Praful Patel - President of the All India Football Federation(AIFF), Member of Parliament, Govt. of India, Senior Leader NCP.</title>

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
	<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
	<!-- Loading: Styles -->
	<!--<link rel="stylesheet/less" href="assets/less/style.less" media="screen">-->
	<link rel="stylesheet" href="assets/css/style.css" media="screen">

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
					<li class="nav-special"><a href="index"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp;Home<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;More</span></a></li>
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
					<li><a href="contact"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;Contact<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;More</span></a></li>
					<li><a href="#"><i class="fa fa-language" aria-hidden="true"></i>&nbsp;Language</a>
						<ul>
							<li><a href="index"><img alt="" src="assets/img/gb.png" alt="us">&nbsp;&nbsp;English</a></li>
							<li><a href="gj/index"><img alt="" src="assets/img/in.png" alt="us">&nbsp;&nbsp;Gujarati</a></li>
						</ul>
					</li>
					<!-- <li><a href="https://play.google.com/store/apps/details?id=com.acetrot.prafulpatel&hl=en" target="_blank"><img alt="" src="assets/img/playstore-menu.png" alt="download from playstore" title="Download App from Google Play Store"></a></li>
					<li><a href="https://itunes.apple.com/in/app/praful-patel/id1212795298?mt=8" target="_blank"><img alt="" src="assets/img/applestore-menu.png" alt="download from apple store" title="Download App from Apple Store"></a></li> -->
				</ul>
			</nav>
		</div>
	</header>

	<!-- End: Header -->

	<!-- Start: Hero -->
	<div id="hero">
		<div class="q-container bk-img">
			<div class="box-join simple-half">

				<h2 class="section-headline inverted"><span>Join Praful Patel</span>All for <em>India</em>.<br>All for <em>a Better Life</em>!</h2>
				<p>"People of India deserve better jobs, better lives, better healthcare. They deserve peace. Join me and together we can make it all possible. Join the List of proud Indians that support us!"</p>
				<form id="index-form" data-action="assets/php/home-form-process.php" method="post">
					<div class="q-row">
						<div class="q-col-1-2"><label>Name</label><input type="text" name="name" required></div>
						<div class="q-col-1-2"><label>Email</label><input type="email" name="email" required></div>
					</div>
					<div class="q-row">
						<div class="q-col-1-2"><label>Phone</label><input type="text" name="number" required maxlength="10"></div>
						<div class="q-col-1-2"><label>Zipcode</label><input type="text" name="zip" required maxlength="6"></div>
					</div>
					<div class="q-row">
						<div class="g-recaptcha q-col-1-1" data-sitekey="<?php echo SITE_KEY; ?>"></div>
					</div>
					<div class="q-row">
						<div class="q-col-1-1"><input type="submit" class="" name="submit" value="I WANT TO JOIN"></div>
					</div>
					<div class="message"></div>
				</form>
			</div>
		</div>
	</div>
	<!-- End: Hero -->
	<div id="home-cta" style="text-align: center;">
		<div class="q-container wow animated fadeInDown animated" data-wow-duration="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-name: fadeInDown;">
			<a href="positions-held">
				<div id="box-donate" class="box box-alt simple-half" style="background-color: #ff8000;">
					<h4 class="box-headline">Positions Held</h4>
					<p>Taking one step at a time.</p>
				</div>
			</a>
			<a href="ncp">
				<div id="box-volunteer" class="box box-alt simple-half">
					<h4 class="box-headline">Nationalist Congress Party</h4>
					<p>Every helping hand counts. We stand together for India!</p>
				</div>
			</a>
		</div>
	</div>
	<div class="q-container center-txt abt-cont">
		<div class="q-row">
			<div class="q-col-1-1">
				<h2 class="section-headline wow animated fadeInLeft animated">ABOUT</h2>
				<p>Praful Patel, a Member of Parliament (Rajyasabha) was born on the 17th of February, 1957 in Kolkata.<br> At the youthful age of 33 years, Praful Patel was elected thrice consecutively to the LokSabha i.e. the 10th, 11th and 12th LokSabha.<br> Again in 2009 he was elected to the 15th LokSabha for the fourth time. In between, Praful Patel was elected twice to the RajyaSabha in 2000 and 2006.</p>
				<a href="about" class="button button-alt button-outline button-large">Read More</a>
			</div>
		</div>
	</div>
	<!-- Start: Main -->
	<main id="main">
		<!-- Start: Article Grid -->
		<div class="section article-grid center-txt">
			<div class="q-container">
				<div class="q-row">
					<article class="q-col-1-4 wow animated fadeInUp" data-wow-offset="100" data-wow-duration="1s">
						<div class="article-headline">
							<h3 class="sub-headline deco-headline">Leadership</h3>
						</div>
						<div class="article-summary">
							<div class="article-image"><a href="leadership"><img alt="" class="img" src="assets/img/new-leader.jpg" alt="An extraordinary leader"></a></div>
							<p><a href="leadership" class="button btn-wdt">An extraordinary leader&nbsp;&nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></p>
						</div>
					</article>
					<article class="q-col-1-4 wow animated fadeInUp" data-wow-offset="200" data-wow-duration="1s">
						<div class="article-headline">
							<h3 class="sub-headline deco-headline">Vision</h3>
						</div>
						<div class="article-summary">
							<div class="article-image"><a href="vision"><img alt="" class="img" src="assets/img/new-vision.jpg" alt="Vision"></a></div>
							<p></p>
							<p><a href="vision" class="button btn-wdt">Always ahead of his times&nbsp;&nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></p>
						</div>
					</article>
					<article class="q-col-1-4 wow animated fadeInUp" data-wow-offset="300" data-wow-duration="1s">
						<div class="article-headline">
							<h3 class="sub-headline deco-headline">Social <span>Initiatives</span></h3>
						</div>
						<div class="article-summary">
							<div class="article-image"><a href="social"><img alt="" class="img" src="assets/img/new-social.jpg" alt="Social Initiatives"></a></div>
							<p></p>
							<p><a href="social" class="button btn-wdt">The leader who is one of us&nbsp;&nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></p>
						</div>
					</article>
					<article class="q-col-1-4 wow animated fadeInUp" data-wow-offset="300" data-wow-duration="1s">
						<div class="article-headline">
							<h3 class="sub-headline deco-headline">Educationalist</h3>
						</div>
						<div class="article-summary">
							<div class="article-image"><a href="educationalist"><img alt="" src="assets/img/new-edu.jpg" class="img" alt="Educationalist"></a></div>
							<p></p>
							<p><a href="educationalist" class="button btn-wdt">Great educationalist&nbsp;&nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></p>
						</div>
					</article>
				</div>
			</div>
		</div>
		<!-- End: Article Grid -->

		<!-- Start: Social Updates -->
		<div class="section social-updates">
			<div class="q-container">
				<div class="q-row pad-top">
					<div class="q-col-1-1 wow animated fadeInUp" data-wow-duration="0.5s" data-wow-offset="500">
						<div id="social-slider" class="simple-slider">
							<div class="simple-slide top-desk">
								<div class="social-update center-txt">
									<p class="line-h testimo mob-test">Remembering the pictorial biography of our Dear Praful Patel, he never stirred up in the Parliament. With his conciliating character he also makes other people calm. I wish him to make lots of progress in life and all the best for his future.</p>
									<p class="fnt name-css mob-test-name"> - Pranab Mukherjee, President of India </p>
								</div>
							</div>
							<div class="simple-slide top-desk">
								<div class="social-update center-txt">
									<p class="line-h testimo mob-test">Not with standing political differences, Patel has friends across political parties, which he has well earned over decades. He has always kept his feet firm in the grassroots.</p>
									<p class="fnt name-css mob-test-name"> - Devendra Fadnavis, Chief Minister of Maharashtra</p>
								</div>
							</div>
							<div class="simple-slide top-desk">
								<div class="social-update center-txt">
									<p class="line-h testimo mob-test">Patel has the power to sustain relationships & is always there when you need him.</p>
									<p class="fnt name-css mob-test-name">- Mukesh Ambani </p>
								</div>
							</div>
							<div class="simple-slide top-desk">
								<div class="social-update center-txt">
									<p class="line-h testimo mob-test">Patel's public life had been decent and his commitment for society is admirable.<br></p>
									<p class="fnt name-css mob-test-name">- Uddhav Thackeray</p>
								</div>
							</div>
							<div class="simple-slide top-desk">
								<div class="social-update center-txt">
									<p class="line-h testimo mob-test">Praful patel has carried forward his father, Manoharbhai's legacy very well and is adding to it in a large measure.</p>
									<p class="fnt name-css mob-test-name"> - Amitabh Bachchan </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End: Social Updates -->

		<!-- Start: News -->
		<div class="section section-alt home-news sec-newss">
			<div class="q-container">
				<div class="q-row">
					<div class="q-col-1-3">
						<img alt="" src="assets/img/visionary.jpg" class="img-bord">
					</div>
					<div class="q-col-1-3 wow animated zoomIn" data-wow-duration="0.5s" data-wow-offset="200">
						<h3 class="sub-headline">Twitter <span>Feed</span></h3>

						<div class="headline-list">
							<ul>
								<li>
									<a class="twitter-timeline" data-chrome="nofooter transparent noheader noborders noscrollbar" data-width="350" data-height="400" data-theme="light" href="https://twitter.com/praful_patel">Tweets by praful_patel</a>
									<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
								</li>
							</ul>
						</div>
					</div>
					<div class="q-col-1-3 wow animated zoomIn" data-wow-duration="0.5s" data-wow-offset="200">
						<h3 class="sub-headline">Recent <span>Events</span></h3>
						<!-- 	<p>Praful Patel is in constant contact with the Real India, the Real People. <a href="#">View the Roadmap</a></p> -->
						<table class="light-table events-table tbl">
							<tr>
								<th>
									<p>Location</p>
								</th>
								<th>
									<p>Start Date</p>
								</th>
							</tr>
							<?php

							$sql = "SELECT * FROM events where status=1 and flag=0 and startDate > ADDDATE(NOW(), INTERVAL -1 MONTH) order by startDate desc LIMIT 3";
							$result  = mysqli_query($db, $sql);
							while ($result->num_rows > 0 && $row = $result->fetch_assoc()) {

							?>
								<tr>
									<td class="tbl-td">
										<p><strong><?php echo urldecode($row["title"]); ?></strong><br><?php echo urldecode($row["venue"]); ?></p>
									</td>
									<td class="tbl-td">
										<p><strong><?php echo urldecode(date("d-m-Y", strtotime($row["startDate"]))); ?></strong><br><?php echo urldecode($row["startTime"]); ?> - <?php echo urldecode($row["endTime"]); ?>
										<p>
									</td>
								</tr><?php
									}
										?>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- End: News -->
	</main>
	<!-- End: Main -->

	<!-- Start: Footer -->
	<footer id="footer">
		<div class="q-container">
			<div class="q-row top-pad">
				<div class="q-col-1-4 footer-col">
					<h2 class="footr-hd">Links</h2>
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
					<ul class="social-profiles scl-ul">
						<li><a href="https://www.facebook.com/ShriPrafulPatel" title="Facebook" class="social-space" target="_blank"><img alt="" src="assets/img/facebook-logo.png"></a></li>
						<li><a href="https://twitter.com/praful_patel/" title="Twitter" class="social-space" target="_blank"><img alt="" src="assets/img/twitter-logo.png"></a></li>
						<li><a href="https://www.youtube.com/user/shriprafulpatel" title="YouTube" class="social-space" target="_blank"><img alt="" src="assets/img/youtube-logo.png"></a></li>
					</ul>
				</div>
				<!-- <div class="q-col-1-4 center-txt dwn-app-cont">
					<h2 class="footr-hd">Download App:</h2>
					<ul class="social-profiles" class="inline-so">
						<li class="inline-so"><a href="https://play.google.com/store/apps/details?id=com.acetrot.prafulpatel&hl=en" target="_blank">&nbsp;&nbsp;<img alt="" src="assets/img/googleplaystore.png" height="56px" width="170px" alt="Google playstore" title="Download App from Google Play Store"></a></li>
						<li class="inline-so"><a href="https://itunes.apple.com/in/app/praful-patel/id1212795298?mt=8" target="_blank" title="Download App from Apple Store"><img alt="" src="assets/img/applelogo.png" height="54px" width="170px" alt="itunes"></a></li>
					</ul>
				</div> -->
			</div>
			<div class="q-container privcy-cont">
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

	<!-- Loading: Custom Scripts -->
	<script src="assets/js/custom.electoral.js"></script>
</body>

</html>