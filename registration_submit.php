<?php
$to = 'bybentan@gmail.com';
$subject = 'this came from Bens hard work';

// Pull the information from the request (POST variable)
// http://php.net/manual/en/function.filter-input.php
$firstName 		= filter_input(INPUT_POST, "FirstName");
$lastName 		= filter_input(INPUT_POST, "LastName");
$organization 	= filter_input(INPUT_POST, "Organization");
$emailAddr 		= filter_input(INPUT_POST, "FromEmailAddress", FILTER_VALIDATE_EMAIL);
$workPhone 		= filter_input(INPUT_POST, "WorkPhone");
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
	$message = "Organization is required";
}
else if ($emailAddr === FALSE || $emailAddr == null) {
	$message = "Email address is required and must be a valid email address";
}

// Validation passed, construct the message and send it.
else {
	$message = <<<EMAIL

	#FirstName
	$LastName
	$Organization
	$FromEmailAddress
	$WorkPhone
	$CellPhone

EMAIL;

	// Send the email
	$header 	= "$FromEmailAddress";
	mail($to, $subject, $message, $header);
	$error 		= false;	
}

// Redirect back to your registration page.
// http://php.net/manual/en/function.header.php

if ($error) {
	header("Location: registration.php?message=$message&error=$error");
}
else {
	header("Location: registration_success.php"); 
}

?>