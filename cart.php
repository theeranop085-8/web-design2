<?php
	session_start();
	include 'condb.php';
	error_reporting(0);
	$p_id = mysqli_real_escape_string($conn,$_GET['p_id']); 
	$act = mysqli_real_escape_string($conn,$_GET['act']);


	if($act=='add' && !empty($p_id))
	{
		if(isset($_SESSION['cart'][$p_id]))
		{
			$_SESSION['cart'][$p_id]++;
		}
		else
		{
			$_SESSION['cart'][$p_id]=1;
		}
	}

	if($act=='remove' && !empty($p_id))  //ยกเลิกการสั่งซื้อ
	{
		unset($_SESSION['cart'][$p_id]);
	}

	if($act=='update')
	{
		$amount_array = $_POST['amount'];
		foreach($amount_array as $p_id=>$amount)
		{
			$_SESSION['cart'][$p_id]=$amount;
		}
	}

	if($act=='cancel')  
	{
		unset($_SESSION['cart']);
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="product.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<title>Shopping Cart</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Prompt:wght@100&display=swap');

table{
	margin: 100px 25%;
	font-family: 'Prompt', sans-serif;
}

th{
	
	font-family: 'Prompt', sans-serif;
    font-size:17px;
	
 }

td{
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 0.03em;
	
}

table {
	width: 800px;
	border-collapse: collapse;
	overflow: hidden;
}

th,
td {
	padding: 15px;
	background-color: rgba(255,255,255,0.2);
	color:black;
	
}

th {
	text-align: center;
}

a{
	text-decoration: none;
	color:white;
	font-weight:bold;
}

b{
	text-align:center;
}

button {
	padding: 6px 10px;
	background-color:grey;
	border-radius: 15px;
	color:white;
}

button:hover {
  background-color: red; 
  
}

.shop {
 color:black;
 font-size:15px;
 
}

.shop:hover{
	color:grey;
	transition-duration: 0.4s;
	
}

.button-3 {
  appearance: none;
  background-color: #2ea44f;
  border: 1px solid rgba(27, 31, 35, .15);
  border-radius: 6px;
  box-shadow: rgba(27, 31, 35, .1) 0 1px 0;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-family: -apple-system,system-ui,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji";
  font-size: 14px;
  font-weight: 600;
  line-height: 20px;
  padding: 6px 16px;
  position: relative;
  text-align: center;
  text-decoration: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: middle;
  white-space: nowrap;
}

.button-3:hover {
  background-color: #2c974b;
}

.text{
	text-align:center;
}

</style>

<body>
<header>
        <nav>
            <div>
                <a class="logo" href="Index.php"><img src="Logo.jpg" width="300px"></a>
            </div>
            <ul>
            <li>
                <a href="shop.php">ซื้อสินค้า</a>
            </li>
                <li class="Enter">
                    <a href="product.php">เข้าสู่ระบบ</a>
                    <a href="signup.php">สมัครสมาชิก</a>
                </li>
                <li>
                    <form action="search.php" method="post">
                        <input type="text" name="search" class="in" id="text" placeholder=" ค้นหา" onkeypress='return keyEnter(event)' required>  
                        <input type="submit" value="ค้นหา" class="but">
                    </form>
                </li>
            </ul>
        </nav>
    </header>


<form id="frmcart" name="frmcart" method="post" action="?act=update&p_id=0">
  <table width="600" border="1" align="center" class="square">
  <h1 class="text">ตระกร้าสินค้า</h1>    
  <tr>
      
    </tr>
    <tr>
      <th>สินค้า</th>
      <th>ราคา</th>
      <th>จำนวน</th>
      <th>รวม(บาท)</th>
      <th class="del">ลบ</th>
    </tr>
<?php
$total=0;
if(!empty($_SESSION['cart']))
{
	foreach($_SESSION['cart'] as $p_id=>$qty)
	{
		$sql = "SELECT * FROM product WHERE p_id=$p_id";
		$query = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($query);
		$sum = $row['p_price'] * $qty; //ราคาสินค้า รวมจำนวนสั่งซื้อ
		$total += $sum;
		echo "<tr>";
		echo "<td width='334'>" . $row["p_name"] . "</td>";
		echo "<td width='46' align='right'>" .number_format($row["p_price"],2) . "</td>";
		echo "<td width='57' align='right'>";  
		echo "<input type='number' name='amount[$p_id]' value='$qty' size='2'/></td>";
		echo "<td width='93' align='right'>".number_format($sum,2)."</td>";
		echo "<td width='46' align='center'><button><a href='cart.php?p_id=$p_id&act=remove'>ลบ</a></button></td>";  //remove product
		echo "</tr>";
	}
	echo "<tr>";
  	echo "<td colspan='3' bgcolor='#CEE7FF' align='center'><b>ราคารวม</b></td>";
  	echo "<td align='right' bgcolor='#CEE7FF'>"."<b>".number_format($total,2)."</b>"."</td>";
  	echo "<td align='left' bgcolor='#CEE7FF'></td>";
	echo "</tr>";
}
?>
<tr>
<td><a class="shop" href="shop.php">กลับหน้ารายการสินค้า</a></td>
<td colspan="4" align="right">
	<input class="button-3" type="button" name="cancel" value="ลบตะกร้านี้" onclick="window.location='cart.php?act=cancel&p_id=0';" />
    <input class="button-3" type="submit" name="button" id="button" value="เเก้ไข" />
    <input class="button-3" type="button" name="Submit2" value="สั่งซื้อ" onclick="window.location='confirm.php';" />
</td>
</tr>
</table>
</form>

<footer class="bottom-footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>get help</h4>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">shipping</a></li>
                    <li><a href="#">returns</a></li>
                    <li><a href="#">order status</a></li>
                    <li><a href="#">payment options</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>follow us</h4>
                <div class="social-links">
                    <a href="https://www.facebook.com/salamander.doraguniru.3/"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/bb_buzed/"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>