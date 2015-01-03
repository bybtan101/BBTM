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
		<script src="js/main.js"></script>
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
									<a href="index.html">Home</a>
									<a href="programs.html">Programs</a>
									<a href="Aboutus.html">About Us</a>
									<a href="FAQs.html">FAQs</a>
									<a href="Contactus.html">Contact Us</a>
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
											<p>Here at InterprIT, we are dedicated to ensuring that we provide the best course material for our students. If there are any questions or inquiries,
										   please fill out the web form below and one of our instructors
										   will get back to you within 48 hours.</p>
										</header>
										<p id="feedback"><?php echo $feedback; ?></p>
											<form action="registration_submit.php" method="post">
											<input id="SnapHostID" name="SnapHostID" type="hidden" value="QZM4Q2PMXHJA" />
											<table border="0" cellpadding="5" cellspacing="0" width="600">
											<tr>
											<td><b>Full Name</td>
											<td>
											<input id="FirstName" name="FirstName" type="text" maxlength="60" style="width:146px; border:1px solid #999999" />
											<input id="LastName" name="LastName" type="text" maxlength="60" style="width:146px; border:1px solid #999999" />
											</td>
											</tr><tr>
											<td><b>Email address*:</b></td>
											<td><input id="FromEmailAddress" name="FromEmailAddress" type="text" maxlength="60" style="width:300px; border:1px solid #999999" /></td>
											</tr><tr>
											<td><b>Comments:</b></td>
											<td><input id="Organization" name="Organization" type="text" maxlength="60" style="width:300px; border:1px solid #999999" /></td>
											<textarea name="Comments" cols=50 rows=8></textarea>
								<!----End Fix-->
											<br />
											<input id="skip_Submit" name="skip_Submit" type="submit" value="Submit" />
											</td>
											</tr>
											</table>
											<br />
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
												<a href="#" class="button-big">Register!</a>
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