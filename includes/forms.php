<?php
$emailTo = 'lance@moscreative.com';
$status = "";
$action = $_GET['action'];

//GENERAL CONTACT FORM SUBMISSION
if($action == 'contactForm'){
	//Form variables declared
	$name = $_GET['name'];
	$company = $_GET['company'];
	$contact_info = $_GET['contact_info'];
	$message = $_GET['message'];

	$headers ='MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html;charset=iso-8859-1' . "\r\n";
	$headers .= 'From: mos@moscreative.com' . "\r\n";

	$body .= "Name: $name<br/>";
	$body .= "Company: $company<br/>"
	$body .= "Contact Information: $contact_info<br/>";
	$body .= "Message: $message <br/>";

	$subject = "MOS Creative Contact Form Inquiry";
	
	mail($emailTo, $subject, $body, $headers);
	$status = 'Thanks for contacting us!';
	echo $status;
}

if($action == 'internForm'){
	//Form variables declared
	$name = $_GET['name'];
	$school = $_GET['school'];
	$email = $_GET['email'];
	$gradDate = $_GET['gradDate'];
	$position = $_GET['position'];

	$headers ='MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html;charset=iso-8859-1' . "\r\n";
	$headers .= 'From: mos@moscreative.com' . "\r\n";

	$body .= "Name: $name<br/>";
	$body .= "School: $school<br/>"
	$body .= "Email: $email<br/>"
	$body .= "Expected Graduation Date: $gradDate<br/>";
	$body .= "Position: $position<br/>";

	$subject = "MOS Creative Intership Application";
	
	mail($emailTo, $subject, $body, $headers);
	$status = 'Thanks for applying!';
	echo $status;
}
?>