<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

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





<!-- about section starts -->

<section class="about">
    <dir class="images">
        <img src="images/about-img.png">
    </dir>
    <div class="content">
        <h3>ກ່ຽວກັບເວັບໄຊຂອງເຮົາ</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam modi ea fuga quibusdam fugiat porro doloremque, quas dignissimos culpa unde. Recusandae maxime aliquam beatae reiciendis, facilis voluptatum eligendi nesciunt ipsa?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, distinctio et? Odio voluptatum eius reprehenderit saepe quisquam excepturi molestiae architecto.</p>
        <a href="#" class="btn">ອ່ານເພີ່ມຕື່ມ</a>
    </div>
</section>


<!-- about section ends -->


<!-- faq section starts -->

<section class="faq">
    <h1 class="heading">ຄຳຖາມ & <span>ຄຳຕອບ</span></h1>

    <div class="accordion-container">

        <div class="accordion">
            <div class="accordion-heading">
                <h3>ວິທີການສ້າງເວັບໄຊທ໌?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam modi ea fuga quibusdam fugiat porro doloremque, quas dignissimos culpa unde. Recusandae maxime aliquam beatae reiciendis, facilis voluptatum eligendi nesciunt ipsa?
            </p>
            
        </div>

         <div class="accordion">
            <div class="accordion-heading">
                <h3>ວິທີການສັ່ງຊື້ອອນລາຍ?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam modi ea fuga quibusdam fugiat porro doloremque, quas dignissimos culpa unde. Recusandae maxime aliquam beatae reiciendis, facilis voluptatum eligendi nesciunt ipsa?
            </p>
            
        </div>

         <div class="accordion">
            <div class="accordion-heading">
                <h3>ວິທີຈ່າຍເງິນທາງອອນລາຍ?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam modi ea fuga quibusdam fugiat porro doloremque, quas dignissimos culpa unde. Recusandae maxime aliquam beatae reiciendis, facilis voluptatum eligendi nesciunt ipsa?
            </p>
            
        </div>

         <div class="accordion">
            <div class="accordion-heading">
                <h3>ວິທີຕິດຕໍ່ສູນບໍລິການ?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam modi ea fuga quibusdam fugiat porro doloremque, quas dignissimos culpa unde. Recusandae maxime aliquam beatae reiciendis, facilis voluptatum eligendi nesciunt ipsa?
            </p>
            
        </div>
    </div>

</section>


<!-- faq section ends -->




<!-- review section start -->


<section class="revicw">
    <h1 class="heading">ຄວາມຄິດເຫັນ<span>ຂອງລູກຄ້າ</span></h1>


    <div class="swiper revicw-slider">
        <div class="swiper-wrapper">
            <div class=" swiper-slide slide">
                <img src="images/pic-1.png">
                <h3>jonhn deo</h3>
                <span>desgigner</span>
                <p class="accordion-content">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam modi ea fuga quibusdam fugiat porro doloremque, quas dignissimos culpa unde. Recusandae maxime aliquam beatae reiciendis, facilis voluptatum eligendi nesciunt ipsaRecusandae maxime aliquam beatae reiciendis, facilis voluptatum eligendi nesciunt ipsa?
               </p>

            </div>

            <div class="swiper-slide slide">
                <img src="images/pic-2.png">
                <h3>jonhn deo</h3>
                <span>desgigner</span>
                <p class="accordion-content">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam modi ea fuga quibusdam fugiat porro doloremque, quas dignissimos culpa unde. Recusandae maxime aliquam beatae reiciendis, facilis voluptatum eligendi nesciunt ipsa?
               </p>

            </div>

            <div class="swiper-slide slide">
                <img src="images/pic-3.png">
                <h3>jonhn deo</h3>
                <span>desgigner</span>
                <p class="accordion-content">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam modi ea fuga quibusdam fugiat porro doloremque, quas dignissimos culpa unde. Recusandae maxime aliquam beatae reiciendis, facilis voluptatum eligendi nesciunt ipsaRecusandae maxime aliquam beatae reiciendis, facilis voluptatum eligendi nesciunt ipsa?
               </p>

            </div>

            <div class="swiper-slide slide">
                <img src="images/pic-4.png">
                <h3>jonhn deo</h3>
                <span>desgigner</span>
                <p class="accordion-content">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam modi ea fuga quibusdam fugiat porro doloremque, quas dignissimos culpa unde. Recusandae maxime aliquam beatae reiciendis, facilis voluptatum eligendi nesciunt ipsa?
               </p>

            </div>

            <div class="swiper-slide slide">
                <img src="images/pic-5.png">
                <h3>jonhn deo</h3>
                <span>desgigner</span>
                <p class="accordion-content">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam modi ea fuga quibusdam fugiat porro doloremque, quas dignissimos culpa unde. Recusandae maxime aliquam beatae reiciendis, facilis voluptatum eligendi nesciunt ipsa?
               </p>

            </div>
        </div>
    </div>
</section>



<!-- review section ends -->






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