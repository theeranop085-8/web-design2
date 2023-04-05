<?php
	$conn= mysqli_connect("localhost","root","","db_cart") or die("Error: " . mysqli_error($conn));
	mysqli_query($conn, "SET NAMES 'utf8' "); 
?>