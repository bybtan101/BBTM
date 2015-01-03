<?php
require("vendor/autoload.php");

$to = 'reneekchau134@gmail.com';
$subject = 'Foundation of Web App Dev Questions';

// Pull the information from the request (POST variable)
// http://php.net/manual/en/function.filter-input.php
$firstName 		= filter_input(INPUT_POST, "FirstName");
$lastName 		= filter_input(INPUT_POST, "LastName");
$organization 	= filter_input(INPUT_POST, "Organization");
$emailAddr 		= filter_input(INPUT_POST, "FromEmailAddress", FILTER_VALIDATE_EMAIL);
$cellPhone 		= filter_input(INPUT_POST, "CellPhone");

$error 			= true;
$message 		= "Thanks for registering with us!";

// Validation
if ($firstName === FALSE || $firstName == null) {
	$message = "First Name is required";
}
else if ($lastName === FALSE || $lastName == null) {
	$message = "Last Name is required";
}
else if ($organization === FALSE || $organization == null) {
	$message = "Comments Required";
}
else if ($emailAddr === FALSE || $emailAddr == null) {
	$message = "Email address is required and must be a valid email address";
}

// Validation passed, construct the message and send it.
else {
	$message = <<<EMAIL

	$firstName
	$lastName
	$organization
	$emailAddr
	$cellPhone

EMAIL;

	// Send the email	
	$mail = new PHPMailer();

	$mail->isSMTP();
	$mail->Host = "mailgate.sfu.ca";
	$mail->Port = "465";
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "ssl";
	$mail->Username = "ybt@sfu.ca";
	$mail->Password = "Helpme1234";
	$mail->From = $emailAddr;
	$mail->AddAddress($to);
	$mail->Subject = $subject;
	$mail->Body = $message;
	$mail->WordWrap = 50;

	if ($mail->send()) {
		$error 		= false;	
	}
	else {
		$message = "Failed to do stuff: " . $mail->ErrorInfo;
	}
}

// Redirect back to your registration page.
// http://php.net/manual/en/function.header.php
if ($error) {
	header("Location: registration1.php?message=$message&error=$error");
}
else {
	header("Location: registration_success.php"); 
}

?>