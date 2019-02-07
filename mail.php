<?php
if (isset($_POST['send'])){

	$to ="elahtendero@gmail.com";
	$subject = "From Portfolio"

	$message = 'From: ' . $_POST['name'] . "\r\n\r\n";
	$message .= 'Email: '. $_POST['email']. "\r\n\r\n";
	$message .='message' . $_POST['message'];

	echo $message;



}





?>