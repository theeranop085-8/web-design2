<?php
  //connect db
  include("condb.php");
  $sql = "SELECT * FROM product ORDER BY p_id ASC";  
  $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Shop</title>
</head>

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

    <div class="img"></div>


    <h1 class="pad">สินค้าวางจำหน่าย</h1>

    <div>
        <main class="grid">
            <?php foreach($result as $r){ ?>
                <article>
                    <?php echo "<img src='img/" . $r["p_pic"] ." ' width='80'>"?>
                    <div class="text">
                        <?php echo "<h3>".$r["p_name"]."</h3>"?>
                        <?php echo "<a href='product_detail.php?p_id=$r[p_id]'><button>click</button></a>"?>
                    </div>
                </article>
            <?php } ?>
            
        </main>
    </div>

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