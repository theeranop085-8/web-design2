<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product Detail</title>

<style>
  *{
    border-radius: 10px;
  }
  body{
    background-image: url("https://get.wallhere.com/photo/illustration-simple-background-long-hair-anime-anime-girls-artwork-purple-cartoon-black-hair-hair-mouth-Tomori-Nao-Charlotte-anime-happiness-joint-girl-smile-eye-1920x1200-px-computer-wallpaper-brown-hair-human-hair-color-ear-fictional-character-organ-mangaka-hime-cut-cg-artwork-795750.jpg?fbclid=IwAR3oI8esP4yMcx7MyC660Yc2KQavKjpX1M3-OKaGTERBMqHAfHGPhmVsGIU");
    background-size: 100%;
  }

  table{
    margin-top: 13%;
    margin-right: 25%;
  }

  @import url('https://fonts.googleapis.com/css2?family=Prompt:wght@200&display=swap');

 body {
   margin-top: 20px;
   font-family: sans-serif;
   font-weight: 100;
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
 
 b{
   text-align:center;
 }
 
 .On {
   color: black;
   appearance: none;
   border: 1px solid rgba(27, 31, 35, .15);
   border-radius: 6px;
   box-shadow: rgba(27, 31, 35, .1) 0 1px 0;
   box-sizing: border-box;
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
 
 .On:hover {
   background-color: #2c974b;
 }

 .ON {
   padding: 5px 10px;
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
</style>


</head>

<body>

  
<table width="600" border="0" align="center" class="square" >
  <tr>
    <td colspan="3" ><b>Product</b></td>
  </tr>
    <?php
    //connect db
  
    include("condb.php");
    
	$p_id = $_GET['p_id']; 
	
	$sql = "SELECT * FROM product WHERE p_id=$p_id";  
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	//แสดงรายละเอียด
    echo "<form action='edit_product_save.php' method='get'>";
    echo "<tr>";
    echo "<td width='85' valign='top'><b>ID</b></td>";
    echo "<td width='279'><input class='ON' type='text' name='p_id' value='".$row['p_id']."'readonly></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td width='85' valign='top'><b>Title</b></td>";
    echo "<td width='279'><input class='ON' type='text' name='p_name' value='".$row['p_name']."'></td>";
    echo "<td width='10%' rowspan='3'><img src='img/" . $row["p_pic"] . " ' width='200px'></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td valign='top'><b>Detail</b></td>";
    echo "<td><input class='ON' type='text' name='p_detail' value='".$row['p_detail']."'></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td valign='top'><b>Price</b></td>";
    echo "<td><input class='ON' type='text' name='p_price' value='".$row['p_price']."'></td>";
    echo "</tr>"; 
    echo "<tr>";
    echo "<td colspan='2' align='center'>";
    echo "<input class='On' type='submit' value='แก้ไขข้อมูล'>&nbsp&nbsp&nbsp&nbsp<input class='On' type='reset' value='รีเซ็ต'>&nbsp&nbsp&nbsp&nbsp
            <a class='On' href='delete_product_save.php?p_id=$row[p_id]';'>ลบสินค้า</a><center><br>";
    echo "<center><a href='product.php'><input class='On' type='button' value='กลับไปหน้าข้อมูลสินค้า'></a>";
    echo "</td>";
    echo "</tr>";
    echo "</form>";

    ?>
</table>
    
    

</body>
</html>