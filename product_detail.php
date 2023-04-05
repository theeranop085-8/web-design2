<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="product.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<title>Product Detail</title>
</head>

<style>
table{
	margin: 100px 25%;
}

th{
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
}

th {
	text-align: center;
}

a{
	text-decoration: none;
}


b{
	text-align:center;
}


button {
    appearance: none;
    border: 1px solid rgba(27, 31, 35, .15);
    border-radius: 6px;
    cursor: pointer;
    font-size: 14px;
    font-weight: 600;
    line-height: 20px;
    padding: 6px 16px;
}

button:hover {
  background-color: green; 
  
}

.shop {
 color:black;
 font-size:15px;
 
}

.shop:hover{
	color:grey;
	transition-duration: 0.4s;
	
}

.button-3:hover {
  background-color: #2c974b;
}

.back{
	font-family: 'Prompt', sans-serif;
	text-align:center;
	color:black;
}

.back:hover{
	color:grey;
	transition-duration: 0.4s;
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


<table width="600" border="1" align="center" class="square">

  <tr><td colspan="3" bgcolor="#CCCCCC"><b>Product</b></td></tr>
  
<?php
//connect db
    include("condb.php");
    error_reporting(0);
	$p_id = $_GET['p_id']; 
	
	$sql = "SELECT * FROM product WHERE p_id=$p_id";  
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	//แสดงรายละเอียด
	echo "<tr>";
  	echo "<td width='85' valign='top'><b>Title</b></td>";
    echo "<td width='279'>" . $row["p_name"] . "</td>";
    echo "<td width='70' rowspan='4'><img src='img/" . $row["p_pic"] . " ' width='100'></td>";
  	echo "</tr>";
  	echo "<tr>";
    echo "<td valign='top'><b>Detail</b></td>";
    echo "<td>" . $row["p_detail"] . "</td>";
  	echo "</tr>";
  	echo "<tr>";
    echo "<td valign='top'><b>Price</b></td>";
    echo "<td>" .number_format($row["p_price"],2) . "</td>";
  	echo "</tr>"; 
  	echo "<tr>";
    echo "<td colspan='2' align='center'>";
    echo "<button><a href='cart.php?p_id=$row[p_id]&act=add'> เพิ่มลงตะกร้าสินค้า </a></button>";
    //echo "<button><a class="back" href="shop.php">กลับไปหน้ารายการสินค้า</a></button></td>";
    echo "</tr>";
?>
</table>


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