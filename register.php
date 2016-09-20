<?php

function register($first_name, $last_name, $email, $password, $confirm_password) {
	echo "Successfully Registered.";
	include 'config.php';
	include 'opendb.php';

	$query = "INSERT INTO register (first_name, last_name, email, password, confirm_password)
	VALUES ('$first_name', '$last_name', '$email', '$password', '$confirm_password')";

	mysqli_query($db, $query) or die (mysqli_error($db));
}

?>
