<?php

	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);
	$subject = htmlspecialchars($_POST['subject']);
	$message = htmlspecialchars($_POST['message']);

	$to = "coucou@yopmail.com";

	mail($to, $subject, $message, $email);

	echo "Email envoyé !";
?>