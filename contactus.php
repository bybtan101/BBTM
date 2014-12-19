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
										<p>Here at InterprIT, we are dedicated to ensuring that we provide the best course material for our students. If there are any questions or inquiries,
										   please don't hesitate to shoot us a quick email by filling out the web form below and one of our instructors
										   will get back to you as soon as possible.</p>
										 <h3>Please fill out the form below with your question.</h3>
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
											<h2>Ready to Sign On?</h2>
										<div id="banner">
											<div class="container">
											<div class="6u">
												<a href="https://www.eventbrite.ca/e/accel-tech-and-misa-presents-foundations-of-web-app-development-tickets-14256861657" class="button-big" style="color:#ffffff;">Register!</a>
												</div>
											</div>
										</div>
									</section>
									<section>
										<header>
											<h2>Course Details</h2>
										</header>
										<ul class="link-list">
											<li><strong>Course Name:</strong><br>Foundations of Web App Development</br></li>
											<li>Start Date: <br>Saturday, January 31st, 2015</br></li>
											<li>Location: <br>SFU Segal Room 4800</br></li>
											<li>Cost:<br>$300 Earlybird or $350 Regular</br></li>
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