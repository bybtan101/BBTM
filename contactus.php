<!DOCTYPE HTML>
<html>
	<head>
		<title>InterprIT</title>
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
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56982153-1', 'auto');
  ga('send', 'pageview');

</script>
	</head>
	<body class="subpage">
		<!-- Header -->
			<div id="header-wrapper">
				<header id="header" class="container">
					<div class="row">
						<div class="12u">

							<!-- Logo -->
								<p></p>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<a href="#" class=""><img src="images/logo2.png" alt="" /></a>
							
							<!-- Nav -->
								<nav id="nav">
                  <a href="index.php">Home</a>
                  <a href="programs.html">Programs</a>
                  <a href="bootcamp.html">Bootcamp</a>
                  <a href="faqs.html">FAQs</a>
                  <a href="contactus.php">Contact Us</a>
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
										<p>Here at InterprIT, we are dedicated to ensuring that we provide the best program material for our students. If there are any questions or inquiries,
										   please don't hesitate to fill out the web form below and one of our instructors
										   will get back to you as soon as possible.</p>
										<h2>Question Form</h2>
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
											<td><b>Institution:</b></td>
											<td><input id="Organization" name="Organization" type="text" maxlength="60" style="width:300px; border:1px solid #999999" /></td>
											</tr><tr>
											<td><b>Email*:</b></td>
											<td><input id="FromEmailAddress" name="FromEmailAddress" type="text" maxlength="60" style="width:300px; border:1px solid #999999" /></td>
											</tr><tr>
											<td><b>Comments:</b></td>
											<td><input rows="3" cols="25" id="CellPhone" name="CellPhone" type="text" maxlength="300" style="length:500px; border:1px solid #999999" /></td>
											<td colspan="2" align="center">
											<table border="0" cellpadding="0" cellspacing="0">
											<tr valign="top">
										
											</tr>
											</table>
											</td>
											</tr>
											</table>
											<br />
											<p align="left">
											   <input id="skip_Submit" name="skip_Submit" type="submit" value="Submit" /></p>
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
												<a href="http://www.eventbrite.ca/e/interprit-bootcamp-project-management-at-the-workplace-tickets-17248581973" class="button-big" style="color:#ffffff;">Register!</a>
												</div>
											</div>
										</div>
									</section>
									<section>
										<header>
											<h2>Program Details</h2>
										</header>
										<ul class="link-list">
											<li><strong>Program Name:</strong><br>Foundations of Web App Development</br></li>
											<li>Start Date: <br>Saturday, Sept 12th, 2015</br></li>
											<li>Location: <br>SFU Segal Room 4600</br></li>
											<li>Cost:<br>$429 Earlybird or $479 Regular</br></li>
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
				&copy; InterprIT. All rights reserved.</a>
			</div>
	</body>
</html>