<?php
$to = 'bybentan@gmail.com';
$subject = 'this came from Ben's hard work';

$FirstName= $_POST['FirstName'];
$LastName= $_POST['LastName'];
$Organization= $_POST['Organization'];
$FromEmailAddress= $_POST['FromEmailAddress'];
$WorkPhone= $_POST['WorkPhone'];
$CellPhone= $_POST['CellPhone'];

$message = <<<EMAIL

#FirstName
$LastName
$Organization
$FromEmailAddress
$WorkPhone
$CellPhone

EMAIL;

$header = '$FromEmailAddress';

if($_POST){
	mail($to, $subject, $message, $header)
	$feedback = 'Thanks for Registering with us';
}
?>
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
											<h2>Registration</h2>
											<h3>Thanks for your interst in registering for this course. The first step is to fill out some contact information. Once completed, you will be directed to our paypal partners
											where a deposit of $50 is charged for reservation for this course while the remaining amount can be presented as a cheque or cash on the first week of class. 
											Afterwards, you will get a email confirmation with the order confirmation code, that will be your unique
											student number for this specific class. </h3>
										</header>
										<h2>Step 1: Registration</h2>
										<p id="feedback"><?php echo $feedback; ?></p>
											<form action="?" method="post" enctype="text/plain" onsubmit="return ValidateForm(this);">
											<input id="SnapHostID" name="SnapHostID" type="hidden" value="QZM4Q2PMXHJA" />
											<script type="text/javascript">
											function ValidateForm(frm) {
											if (frm.FirstName.value == "") {alert('First Name is required.');frm.FirstName.focus();return false;}
											if (frm.LastName.value == "") {alert('Last Name is required.');frm.LastName.focus();return false;}
											if (frm.Organization.value == "") {alert('Institution is required.');frm.Organization.focus();return false;}
											if (frm.FromEmailAddress.value == "") {alert('Email address is required.');frm.FromEmailAddress.focus();return false;}
											if (frm.FromEmailAddress.value.indexOf("@") < 1 || frm.FromEmailAddress.value.indexOf(".") < 1) {alert('Please enter a valid email address.');frm.FromEmailAddress.focus();return false;}
											if (frm.StreetAddress1.value == "") {alert('Address is required.');frm.StreetAddress1.focus();return false;}
											if (frm.City.value == "") {alert('City is required.');frm.City.focus();return false;}
											if (frm.Country.value == "") {alert('Country is required.');frm.Country.focus();return false;}
											if (frm.CaptchaCode.value == "") {alert('Enter web form code.');frm.CaptchaCode.focus();return false;}
											return true; }
											function ReloadCaptchaImage(captchaImageId) {
											var obj = document.getElementById(captchaImageId);
											var src = obj.src;
											var date = new Date();
											var pos = src.indexOf('&rad=');
											if (pos >= 0) { src = src.substr(0, pos); }
											obj.src = src + '&rad=' + date.getTime();
											return false; }
											</script>
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
											</tr><tr>
											</tr><tr>
											</tr><tr>
											</tr><tr>
											</tr><tr>
											</tr><tr>
											</tr><tr>
											</tr><tr>
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