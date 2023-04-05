<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cartoon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Mitsuri</title>
</head>

<body>
    <header>
        <nav>
            <div>
                <a class="logo" href="Index.php"><img src="Logo.jpg" width="300px"></a>
            </div>
            <ul>
            <li>
                <a href="product.php">ซื้อสินค้า</a>
               
            </li>
                <li class="Enter">
                    <a href="login.php">เข้าสู่ระบบ</a>
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

    <section class="main">
        <h2>Kanroji Mitsuri - Demon Slayer</h2>
        <div class="bodie">
            <div class="slider">
                <div class="slides">
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    <input type="radio" name="radio-btn" id="radio5">
                    <input type="radio" name="radio-btn" id="radio6">

                    <div class="slide first">
                        <img src="img/mitsuri/1.mitsuri.jpg">
                    </div>
                    <div class="slide">
                        <img src="img/mitsuri/2.mitsuri.jpg">
                    </div>
                    <div class="slide">
                        <img src="img/mitsuri/3.mitsuri.jpg">
                    </div>
                    <div class="slide">
                        <img src="img/mitsuri/4.mitsuri.jpg">
                    </div>
                    <div class="slide">
                        <img src="img/mitsuri/5.mitsuri.jpg">
                    </div>
                    <div class="slide">
                        <img src="img/mitsuri/6.mitsuri.jpg">
                    </div>
                </div>

                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                    <label for="radio5" class="manual-btn"></label>
                    <label for="radio6" class="manual-btn"></label>
                </div>
            </div>
        </div>

        <br>
        <br>
        <div class="text-box">
            <article>
                <h1 class="topic"> รายละเอียด :</h1>

                <p> <pre>    Kanroji Mitsuri - Demon Slayer<b class="price"> : Regular ราคา 2500 บาท มัดจำ 500 บาท  
                    Dx Ver ราคา 4400 บาท มัดจำ 1400 บาท ได้ฉากด้วย </b>
                    
    
    Brand : Morning Studio

    Material : Resin/PU
    Size : 16cm (H) x 21cm (W) x 15cm (D)

    &#10071 มีรับประกันสินค้า กรณีสินค้าแตกหักสามารถเคลมได้ไม่มีค่าใช้จ่ายค่ะ &#10071

    &#10071 ช่องทางการติดต่อ &#10071
    &#10077 Facebook : https://www.facebook.com/nonaycawaiishop/messages &#10078
    &#10077 IG : nonaycawaiishop &#10078
    &#10077 Line : nonaycawaiishop &#10078
    &#128293Shopee : https://shp.ee/g65u4vf &#128293
   
    <form action="product_detail.php?p_id=7" method="post">
        <input class="buy" type="submit" value="สั่งซื้อสินค้า">
    </form>
    </pre></p>
    
            </article>
        </div>
        <br>
    </section>

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