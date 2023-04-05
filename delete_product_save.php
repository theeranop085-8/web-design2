<?php
    //connect db
    include("condb.php");
    error_reporting(0);
	$p_id = $_GET['p_id'];
	$p_name = $_GET['p_name'];
	$p_detail = $_GET['p_detail'];
	$p_price = $_GET['p_price'];
	$sql = "DELETE FROM product WHERE product.p_id = $p_id";
	$result = mysqli_query($conn, $sql);
    header('location:product.php');

?>