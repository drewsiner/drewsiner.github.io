<?php
	$mail = $_POST['mail'];
	$message = $_POST['message'];

	$email_from = 'drew.siner@gmail.com';
	$email_subject = 'New Starset Email';
	$email_subject = "$message";

	$to = "drew.siner@gmail.com";
	$headers = "From: $email_from \r\n";

	mail($to,$email_subject,$email_body,$headers)
?>