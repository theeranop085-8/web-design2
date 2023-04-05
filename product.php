<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="product.css">
<title>Product List</title>

</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Prompt:wght@200&display=swap');
 body {
   font-family: sans-serif;
   font-weight: 100;
   margin: 5% 25%;
 }	
 
 th{
   
   font-family: 'Prompt', sans-serif;
     font-size:17px;
   
  }
 
 td{
   background-color: #95A5A6;
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
   padding: 15px 10px;
   background-color: rgba(255,255,255,0.2);
   color:black;
 }
 
 th {
   text-align: center;
 }
 
 a{
   padding: 20px;
   text-decoration: none;
   color:black;
   font-weight:bold;
 }
 
 a:hover{
   color:white;
 }
 
 b{
   text-align:center;
 }

 
 input {
   background-color:white;
   transition-duration: 0.2s;
   border-radius: 15px;
   color:white;
   font-family: 'Prompt', sans-serif;
 }

 input:hover {
   background-color: white; 
 }
 
 button {
   background-color:white;
   transition-duration: 0.2s;
   border-radius: 15px;
   color:white;
   font-family: 'Prompt', sans-serif;
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

 h1{
  font-family: 'Prompt', sans-serif;
  text-align:center;
 }
 
</style>
<body>
<table width="600" border="1" align="center" bordercolor="#666666">
  <h1>ข้อมูลสินค้า</h1>
  <tr>
    <th width="91" align="center" bgcolor="#CCCCCC"><strong>ภาพ</strong></th>
    <th width="200" align="center" bgcolor="#CCCCCC"><strong>ชื่อหนังสือ</strong></th>
    <th width="44" align="center" bgcolor="#CCCCCC"><strong>ราคา</strong></th>
    <th width="100" align="center" bgcolor="#CCCCCC"><strong>รายละเอียดสินค้า</strong></th>
  </tr>
  
  
  <?php
  //connect db
  include("condb.php");
  $sql = "SELECT * FROM product ORDER BY p_id ASC";  
  $result = mysqli_query($conn, $sql);

  while($row = mysqli_fetch_array($result))
  { 
    
  	echo "<tr>";
	  echo "<td align='center'><img src='img/" . $row["p_pic"] ." ' width='80'></td>";
	  echo "<td align='left'>" . $row["p_name"] . "</td>";
    echo "<td align='center'>" .number_format($row["p_price"],2). "</td>";
    echo "<td align='center'><button><a href='edit_form.php?p_id=$row[p_id]'>แก้ไข</a></button></td>";
	  echo "</tr>";
  }
  ?>
  
</table><br>
<p><center><button><a href="Index.php">กลับไปหน้าแรก</a></button>&nbsp&nbsp<button><a href="add_form.php">เพิ่มข้อมูลสินค้า</a></button></p>
