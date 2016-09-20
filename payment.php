<?php

function payment($name, $email, $card, $expdat, $cvv, $address) {
	include 'config.php';
	include 'opendb.php';

	$query = "INSERT INTO payment(name, email, card, expdat, cvv, address)
	VALUES ('$name', '$email', '$card', '$expdat', '$cvv', '$address')";

	mysqli_query($db, $query) or die (mysqli_error($db));
	echo "Transaction will be processed.";



}

?>