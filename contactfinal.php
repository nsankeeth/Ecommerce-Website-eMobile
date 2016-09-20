<?php


 include 'contact.php';

	$cName = $_POST ['cName'];
	$cEmail = $_POST ['cEmail'];
	$cSubject= $_POST ['cSubject'];
	$cNum = $_POST ['cNum'];
	
	contact($cName, $cEmail, $cSubject, $cNum);	

?>
