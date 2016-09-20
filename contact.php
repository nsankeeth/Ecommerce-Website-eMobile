<?php

function contact($cName, $cEmail, $cSubject, $cNum) {
	include 'config.php';
	include 'opendb.php';
	echo "Successfully Sent.";
	$query = "INSERT INTO contact (cName, cEmail, cSubject, cNum)
	VALUES ('$cName', '$cEmail', '$cSubject', '$cNum')";

	mysqli_query($db, $query) or die (mysqli_error($db));



}

?>