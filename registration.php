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
											<h2>Registration</h2>
											<h3>Thanks for your interst in registering for this course. The first step is to fill out some contact information. Once completed, you will be directed to our paypal partners
											where a deposit of $50 is charged for reservation for this course while the remaining amount can be presented as a cheque or cash on the first week of class. 
											Afterwards, you will get a email confirmation with the order confirmation code, that will be your unique
											student number for this specific class. </h3>
										</header>
										<h2>Step 1: Registration</h2>										
										<p id="feedback" style="color: red"><strong><?php 
											if (isset($_GET['message'])) { 
												echo $_GET['message']; 
											} 
										?></strong>
										</p>
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
												<td><b>Institution:</b></td>
												<td><input id="Organization" name="Organization" type="text" maxlength="60" style="width:300px; border:1px solid #999999" /></td>
												</tr><tr>
												<td><b>Email address*:</b></td>
												<td><input id="FromEmailAddress" name="FromEmailAddress" type="text" maxlength="60" style="width:300px; border:1px solid #999999" /></td>
												</tr><tr>
												<td><b>Work Phone:</b></td>
												<td><input id="WorkPhone" name="WorkPhone" type="text" maxlength="43" style="width:250px; border:1px solid #999999" /></td>
												</tr><tr>
												</tr><tr>
												<td><b>Cell Phone:</b></td>
												<td><input id="CellPhone" name="CellPhone" type="text" maxlength="43" style="width:250px; border:1px solid #999999" /></td>
												<td colspan="2" align="center">
												<br />
												<table border="0" cellpadding="0" cellspacing="0">
												<tr valign="top">
											
												</tr>
												</table>
												<br />
												* - Please note the $50 is non-refundable upon purchase &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
												<input id="skip_Submit" name="skip_Submit" type="submit" value="Submit" />
												</td>
												</tr>
												</table>
												<br />
												<p>I agree to Acceltech's <a href="termsnconditions.html" target="_blank">Terms and Conditions</a><input type="checkbox" name="tnc" value="tnc"><br></p>
											</form>
								</section>
							</div>
							<div class="3u">
								
								<!-- Sidebar -->
									<section>
											<h2>Ready to Sign On?</h2>
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