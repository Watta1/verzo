<?php
if (isset($_POST["submit"])) {
	$fullname = $_POST['fullname'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	$email = $_POST['contact-email'];
	$human = intval($_POST['human']);
	$from = 'VerzoStudio';
	$to = 'tal.coder@gmail.com';
	$subject = 'Message from Contact Verzo ';

	$body ="From: $fullname\n E-Mail: $email\n Phone Number: $phone\n Message:\n $message";
	if ($human !== 5) {
				$errHuman = 'Your anti-spam is incorrect';
			}
	if (!$errHuman) {
if (mail ($to, $subject, $body, $from)) {
	$result='<div class="alert alert-success"><center>Thank you for contacting us!<br>We will be in touch soon.</center></div>';
} else {
	$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
}
}
}
?>
