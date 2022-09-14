<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

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

        <a href="login.html" class="fas fa-user"></a>
        <a href="#" class="fas fa-heart"></a>
        <a href="cart.html" class="fas fa-shopping-cart"></a>
    </div>
    
</header>
<!-- header section ends  -->

<!-- navbar section starts -->
<div class="side-bar">

    <div id="close-side-bar" class="fas fa-times" ></div>
    <dir class="user">

        <img src="images/user-img.png">
        <h3>sear thor</h3>
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


<!-- login section starts -->

<section class="login">
    <form action="login_db.php" method="POST">
        <h3>login now</h3>
        <input type="text" name="m_username" placeholder="enter your username" class="box">
        <input type="password" name="m_password" placeholder="enter your password" class="box">

        <div class="remember">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me"> remember me</label>
            
        </div>

        <input type="submit" name="login" value="ເຂົ້າສູ່ລະບົບ" class="btn">

        <p>ຍັງບໍ່ເປັນສາມາສິດແມ່ນບໍ? <a href="register.php">..ລົງທະບຽນ..</a></p>

    </form>
</section>

<!-- login section ends -->












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