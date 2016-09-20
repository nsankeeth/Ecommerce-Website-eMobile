<?php


 include 'payment.php';

	$name = $_POST ['name'];
	$email = $_POST ['email'];
	$card= $_POST ['card'];
	$expdat = $_POST ['expdat'];
	$cvv = $_POST ['cvv'];
	$address = $_POST ['address'];
	
	payment($name, $email, $card, $expdat, $cvv, $address);	

?>