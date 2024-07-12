<?php
	session_start();

	extract($_GET);

	include_once 'DBconfig.php';
	$sql ="DELETE FROM wishlist WHERE AdID = $id";

	

	mysqli_query($con,$sql);
	
		
	header("Location: account-favourite-ads.php");
		
	

	
?>