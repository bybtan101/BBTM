<!DOCTYPE HTML>
<html>
	<head>
		<title>Acceltech Academy</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/jquery.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
	</head>
	<body class="subpage">

		<!-- Header -->
			<div id="header-wrapper">
				<header id="header" class="container">
					<div class="row">
						<div class="12u">

							<!-- Logo -->
								<h1><a href="#" id="logo">Acceltech Academy</a></h1>
							
							<!-- Nav -->
								<nav id="nav">
									<a href="index.php">Home</a>
									<a href="programs.html">Programs</a>
									<a href="aboutus.html">About Us</a>
									<a href="faqs.html">FAQs</a>
									<a href="contactus.html">Contact Us</a>
								</nav>

						</div>
					</div>
				</header>
			</div>

		<!-- Content -->
			<div id="content-wrapper">
				<div id="content">
					<div class="container">
						<div class="row">
							<div class="9u">
								
								<!-- Main Content -->
									<section>
										<header>
											<h2>Contact Us</h2>
											<h3>Place to Provide Feedback</h3>
										</header>
										<p>Here at Acceltech, we are dedicated to ensuring that we provide the best course material for our students. If there are any questions or inquiries,
										   please don't hesitate to shoot us a quick email at inquiries@acceltech.com or fill out the web form below, one of our instructors
										   will get back to you within 48 hours.</p>
										 <h3>Please fill out the form below and we will get back to you within 48 hours.</h3>
											<p id="feedback" style="color: red"><strong><?php 
											if (isset($_GET['message'])) { 
												echo $_GET['message']; 
											} 
										?></strong>
											<form action="contact_success.php" method="post">
											<br>Full Name: <input style="margin: 0 0 0.3em 0;" type="text" name="Full Name">
											<br>E-mail:<input style="margin: 0 0 0.3em 1.3em;" type="text" name="Email Address">
											<br>Subject:<input style="margin: 0 0 0.3em 0.9em;" type="text" name="Subject Line">
											<br>Comments: 
											<br>
											<textarea name="Comments" cols=50 rows=8></textarea>
											<br>
											<input type="submit" value="Submit Question">
											<input type="reset" value="Clear Form">
										</form>
									</section>

							</div>
							<div class="3u">
								
								<!-- Sidebar -->
									<section>
										<header>
											<h2>Ready to Sign On?</h2>
										</header>
										<div id="banner">
									<div class="container">
											<div class="6u">
												<a href="registration.php" class="button-big" style="color:#ffffff;">Register!</a>
											</div>
									</div>
										</div>
									</section>
									<section>
										<header>
											<h2>Course Details</h2>
										</header>
										<ul class="link-list">
											<li><strong>Course Name:</strong><br>Foundations in Web Applications</br></li>
											<li>Time: <br>Saturday 11:00AM-2:00PM</br></li>
											<li>Location: <br>SFU Segal School of Business</br></li>
											<li>Cost: <<br>$395.00 CAD</br></li>
										</ul>
									</section>

							</div>
						</div>
					</div>
				</div>
			</div>

		<!-- Footer -->
			<div id="footer-wrapper">
				<footer id="footer" class="container">
					<div class="row">
				</footer>
			</div>

		<!-- Copyright -->
			<div id="copyright">
				&copy; Acceltech Inc. All rights reserved.</a>
			</div>
	</body>
</html>