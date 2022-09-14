<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- cusom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">
    <a href="" class="logo"><i class="fas fa-store"></i>stopie</a>

    <form class="search-form">
        <input type="search" name="" id="search-box" placeholder="ຄົ້ນຫາ ...">
        <label for="search-box" class="fas fa-search"></label>
    </form>
    <div class="icon">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>

        <a href="login.php" class="fas fa-user"></a>
        <a href="#" class="fas fa-heart"></a>
        <a href="cart.php" class="fas fa-shopping-cart"></a>
    </div>
    
</header>
<!-- header section ends  -->

<!-- navbar section starts -->
<div class="side-bar">

    <div id="close-side-bar" class="fas fa-times" ></div>
    <dir class="user">

        <img src="images/user-img.png">
        <h3>username</h3>
        <a href="">ອອກຈາກລະບົບ</a>
        
    </dir>
    <nav class="navbar">
        <a href="index.php"><i class="fas fa-angle-right"></i>ໜ້າຫຼັກ</a>
        <a href="about.php" ><i class="fas fa-angle-right"></i>ກ່ຽວກັບ</a>
        <a href="products.php" ><i class="fas fa-angle-right"></i>ສິນຄ້າ</a>
        <a href="contact.php" ><i class="fas fa-angle-right"></i>ຕິດຕໍ່</a>
        <a href="login.php" ><i class="fas fa-angle-right"></i>ເຂົ້າລະບົບ</a>
        <a href="register.php" ><i class="fas fa-angle-right"></i>ລົງທະບຽນ</a>
        <a href="cart.php" ><i class="fas fa-angle-right"></i>ກະຕ່າ</a>
    </nav>
</div>

<!-- navbar section ends -->

<!-- shopping cart section starst -->
<section class="shopping-cart">
    <h1 class="heading">your <span>products</span></h1>
    <div class="box-container">
        <div class="box">
            <i class="fas fa-times"></i>
            <img src="images/product-1.jpg">
            <div class="content">
                <h3>smartphone</h3>
                <form>
                    <span>quantity :</span>
                    <input type="number" name="" id="" value="1">
                </form>
                <div class="price">$249.99 <span>$399.99</span></div>
            </div>
        </div>

        <div class="box">
            <i class="fas fa-times"></i>
            <img src="images/product-2.jpg">
            <div class="content">
                <h3>camera</h3>
                <form>
                    <span>quantity :</span>
                    <input type="number" name="" id="" value="1">
                </form>
                <div class="price">$249.99 <span>$399.99</span></div>
            </div>
        </div>


        <div class="box">
            <i class="fas fa-times"></i>
            <img src="images/product-3.jpg">
            <div class="content">
                <h3>television</h3>
                <form>
                    <span>quantity :</span>
                    <input type="number" name="" id="" value="1">
                </form>
                <div class="price">$249.99 <span>$399.99</span></div>
            </div>
        </div>


        <div class="box">
            <i class="fas fa-times"></i>
            <img src="images/product-4.jpg">
            <div class="content">
                <h3>speaker</h3>
                <form>
                    <span>quantity :</span>
                    <input type="number" name="" id="" value="1">
                </form>
                <div class="price">$249.99 <span>$399.99</span></div>
            </div>
        </div>

        <div class="box">
            <i class="fas fa-times"></i>
            <img src="images/product-5.jpg">
            <div class="content">
                <h3>speaker</h3>
                <form>
                    <span>quantity :</span>
                    <input type="number" name="" id="" value="1">
                </form>
                <div class="price">$249.99 <span>$399.99</span></div>
            </div>
        </div>
    </div>
</section>

<!-- shopping cart section ends -->











<!-- footer section starts -->
<section class="quick-links">
    <a href="home.html" class="logo"><i class="fas fa-store"></i>shopie</a>
    <div class="links">
       <a href="index.php">ໜ້າຫຼັກ</a>
        <a href="about.php" >ກ່ຽວກັບ</a>
        <a href="products.php" >ສິນຄ້າ</a>
         <a href="contact.php" >ຕິດຕໍ່</a>
        <a href="login.php" >ເຂົ້າລະບົບ</a>
        <a href="register.php" >ລົງທະບຽນ</a>
        <a href="cart.php" >ກະຕ່າ</a>
    </div>

    <div class="shares">
       <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
        <a href="https://twitter.com/" class="fab fa-twitter"></a>
        <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
        <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
    </div>
</section>


<section class="credit">
    <p>created by <span>mr.web designer</span>| all rights reserved!</p>

    <img src="images/card_img.png">
</section>


<!-- footer section ends -->





<!-- swiper js link      -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>