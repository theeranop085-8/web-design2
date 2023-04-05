<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="product.css">
<title>Product Detail</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Prompt:wght@200&display=swap');
 table{
  margin: 0 27%;
 }


 
 body {
   margin-top: 20px;
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
 
 .no {
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
 
 .no:hover {
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

</head>

<body>
  <h2>เพิ่มข้อมูลสินค้า</h2>
<table width="600" border="0" align="center" class="square">
  <tr><td colspan="3"><b>Product</b></td></tr>
    <?php
        error_reporting(0);
        echo "<form action='add_product_save.php' method='get'>";
        echo "<tr>";
        echo "<td width='85' valign='top'><b>Title</b></td>";
        echo "<td width='279'><input type='text' class='in' name='p_name' value='".$row['p_name']."'required></td>";
        echo "<td width='70' rowspan='4'><img src='img/" . $row["p_pic"] . " ' width='100'></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td valign='top'><b>Detail</b></td>";
        echo "<td><input type='text' name='p_detail' value='".$row['p_detail']."'></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td valign='top'><b>Price</b></td>";
        echo "<td><input type='text' name='p_price' value='".$row['p_price']."'></td>";
        echo "</tr>"; 
        echo "<td valign='top'><b>Type</b></td>";
        echo "<td><input type='text' name='c_id' value='".$row['c_id']."'></td>";
        echo "<tr>";
        echo "<td colspan='2' align='center'>";
        echo "<br><input class='no' type='submit' value='เพิ่มข้อมูล'>&nbsp&nbsp&nbsp&nbsp<input class='no' type='reset' value='รีเซ็ต'><center><br>";
        echo "<center><a href='product.php'><input class='no' type='button' value='กลับไปหน้าข้อมูลสินค้า'></a><br>";
        echo "</td>";
        echo "</tr>";
        echo "</form>";
    ?>
</table>
    
</body>
</html>