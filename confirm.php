<?php
	session_start();
    include("condb.php");
    error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="product.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<title>Checkout</title>
</head>

<style>
@import url('https://fonts.googleapis.com/css2?family=Prompt:wght@200&display=swap');
 

 html,
 body {
   
   border:1;
   
 }

 table{
  margin: 0 27%;
 }

 h1{
   margin: 20px 0px;
 }
 
 body {
   font-family: sans-serif;
   font-weight: 100;
   
 }	
 
 td{
   background-color: #95A5A6;
     font-size: 14px;
     text-transform: uppercase;
     letter-spacing: 0.03em;
    
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
   background-color:grey;
   transition-duration: 0.2s;
   border-radius: 15px;
   color:white;
   font-family: 'Prompt', sans-serif;
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
   font-family: 'Prompt', sans-serif;
 }
 
 .button-3:hover {
   background-color: #2c974b;
 }
 
 .text{
   text-align:center;
   font-family: 'Prompt', sans-serif;
 }
 
 h1{
  font-family: 'Prompt', sans-serif;
  text-align:center;
 }

 h2{
   font-family: 'Prompt', sans-serif;
  text-align:center;
  
 }

 .add{
   font-size:20px;
 }

 .pro{
  text-align:center;
  font-size:20px;
 }

 .button{
  background-color:grey;
   transition-duration: 0.2s;
   border-radius: 15px;
   color:white;
   font-family: 'Prompt', sans-serif;
 }

 .button {
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
  font-family: 'Prompt', sans-serif;
}

.button:hover {
  background-color: #2c974b;
}

.bottom-footer {
  margin-top: 50px;
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

<form id="frmcart" name="frmcart" method="post" action="saveorder.php">
  <table width="600" border="1" align="center" class="square">
  <h1>สั่งซื้อสินค้า</h1>  
  <tr>
    </tr>
    <tr>
      <td class="pro"bgcolor="#F9D5E3">สินค้า</td>
      <td class="pro"align="center" bgcolor="#F9D5E3">ราคา</td>
      <td class="pro"align="center" bgcolor="#F9D5E3">จำนวน</td>
      <td class="pro"align="center" bgcolor="#F9D5E3">รวม/รายการ</td>
    </tr>
<?php
	$total=0;
	foreach($_SESSION['cart'] as $p_id=>$qty)
	{
		$sql	= "SELECT * FROM product WHERE p_id=$p_id";
		$query	= mysqli_query($conn, $sql);
		$row	= mysqli_fetch_array($query);
		$sum	= $row['p_price']*$qty;
		$total	+= $sum;
    echo "<tr>";
    echo "<td>" . $row["p_name"] . "</td>";
    echo "<td align='right'>" .number_format($row['p_price'],2) ."</td>";
    echo "<td align='right'>$qty</td>";
    echo "<td align='right'>".number_format($sum,2)."</td>";
    echo "</tr>";
	}
	echo "<tr>";
    echo "<td  align='right' colspan='3' bgcolor='#F9D5E3'><b>รวม</b></td>";
    echo "<td align='right' bgcolor='#F9D5E3'>"."<b>".number_format($total,2)."</b>"."</td>";
    echo "</tr>";
?>
</table>
<p>    
<table border="0" cellspacing="0" align="center">
<tr>
	<h2>รายละเอียดในการติดต่อ</h2>
</tr>
<tr>
    <td class="add" bgcolor="#EEEEEE">ชื่อ:</td>
    <td><input name="name" type="text" id="name" required/></td>
</tr>
<tr>
    <td class="add" width="22%" bgcolor="#EEEEEE">ที่อยู่:</td>
    <td width="78%">
    <textarea name="address" cols="35" rows="5" id="address" required></textarea>
    </td>
</tr>
<tr>
  	<td class="add" bgcolor="#EEEEEE">อีเมล:</td>
  	<td><input name="email" type="email" id="email"  required/></td>
</tr>
<tr>
  	<td class="add" bgcolor="#EEEEEE">เบอร์ติดต่อ:</td>
  	<td><input name="phone" type="text" id="phone" required /></td>
</tr>
<tr>
	<td colspan="2" align="center" bgcolor="#CCCCCC">
    <input type="hidden" name="total" value="<?php echo $total;?>">
	<input class="button" type="submit" name="Submit2" value="สั่งซื้อ" />
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