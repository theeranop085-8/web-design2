<?php
    //connect db
    include("condb.php");
    error_reporting(0);
	$p_name = $_GET['p_name'];
	$p_detail = $_GET['p_detail'];
	$p_price = $_GET['p_price'];
    $c_id = $_GET['c_id'];
	$sql = "INSERT INTO product() VALUES ( NULL, '$p_name', '$p_detail', '$p_price', NULL,'$c_id')";
	$result = mysqli_query($conn, $sql);
    header('location:product.php');

?>