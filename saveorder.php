<?php
	session_start();
    include("condb.php"); 
	error_reporting(0);
	
	
?>
<meta charset=utf-8>


<?php
	$name = $_POST["name"];
	$address = $_POST["address"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$total = $_POST["total"];
	$dttm = Date("Y-m-d G:i:s");

    //เพิ่มลง orderhead
	mysqli_query($conn, "BEGIN"); 
	$sql1	= "INSERT INTO order_head VALUES(null,'$dttm','$name','$address','$email','$phone','$total')";
	$query1	= mysqli_query($conn, $sql1) or die("Error in query: $sql1" . mysqli_error($sql1));

    //หาค่าล่าสุดไปเก็บ detail
	$sql2 = "SELECT MAX(o_id) as o_id FROM order_head WHERE o_name='$name' AND o_email='$email' AND o_dttm='$dttm'";
	$query2	= mysqli_query($conn, $sql2) or die("Error in query: $sql2" . mysqli_error($sql2));
	$row = mysqli_fetch_array($query2);
	$o_id = $row["o_id"]; 

	foreach($_SESSION['cart'] as $p_id=>$qty)
	{
		$sql3	= "SELECT * FROM product WHERE p_id=$p_id";
		$query3	= mysqli_query($conn, $sql3) or die("Error in query: $sql3" . mysqli_error($sql3));
		$row3	= mysqli_fetch_array($query3);
		$producttotal	= $row3['p_price']*$qty;
		
		$sql4	= "INSERT INTO order_detail VALUES(null, $o_id, $p_id, $qty,$producttotal)";
		$query4	= mysqli_query($conn, $sql4) or die("Error in query: $sql4" . mysqli_error($sql4));
	}
	
	if($query1 && $query4){
		mysqli_query($conn, "COMMIT");
		$alert = "บันทึกข้อมูลเรียบร้อยแล้ว ";
		foreach($_SESSION['cart'] as $p_id)
		{	
			unset($_SESSION['cart']);
		}
	}
	else{
		mysqli_query($conn, "ROLLBACK");  
		$alert = "บันทึกข้อมูลไม่สำเร็จ กรุณาติดต่อเจ้าหน้าที่ค่ะ ";	
	}
?>
<script type="text/javascript">
	alert("<?php echo $alert;?>");
	window.location ='product.php';
</script>