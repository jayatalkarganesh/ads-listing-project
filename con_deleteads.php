<?php
	session_start();

	extract($_GET);

	include_once 'DBconfig.php';
	$sql ="DELETE FROM advertise WHERE AdID = $id";

	

	mysqli_query($con,$sql);
	
		
	header("Location: dashboard.php");
		
	

	
?>