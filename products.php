<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- cusom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
        <?php

    include('condb.php');


    $sql="SELECT * from tbl_prd ";
    $result=mysqli_query($condb,$sql)or die ('Error in query :$sql1'.mysql_error());
    $row=mysqli_fetch_array($result);
    // echo $sql;

    // print_r($row);
    // exit();

    ?>
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




<!-- category section starts -->

<section class="category">

    <h1 class="heading">shop by <span>category</span></h1>
    <div class="box-container">
        <a href="#"  class="box">
            <img src="images/cat_img1.png">
            <h3>televisions</h3>
            
        </a >

        <a  href="#" class="box">
            <img src="images/cat_img2.png">
            <h3>smartphones</h3>
            
        </a >


        <a href="#"  class="box">
            <img src="images/cat_img3.png">
            <h3>headphones</h3>
            
        </a >

        <a  href="#" class="box">
            <img src="images/cat_img4.png">
            <h3>smartwatches</h3>
            
        </a >

        <a href="#"  class="box">
            <img src="images/cat_img5.png">
            <h3>games</h3>
            
        </a >

        <a  href="#" class="box">
            <img src="images/cat_img6.png">
            <h3>camera</h3>
            
        </a >

        <a  href="#" class="box">
            <img src="images/cat_img7.png">
            <h3>speakers</h3>
            
        </a >

    </div>
</section>

<!-- category section ends -->


<!-- products section starts -->

<section class="products">
    <h1 class="heading">featured <span>products</span></h1>

    <div class="box-container">
<?php    while ($row=mysqli_fetch_array($result))      {?>
        <div class="box">
            <div class="images">
                <img src="Admin/prd_img/<?php echo $row['p_img'];?>" class="main-img">
                 <img src="Admin/prd_img/<?php echo $row['p_img'];?>" class="hover-img">

                 <div class="icon">
                     <a href="" class="fas fa-shopping-cart"></a>
                     <a href="" class="fas fa-search-plus"></a>
                     <a href="" class="fas fa-heart"></a>
                     <a href="" class="fas fa-share"></a>
                 </div>
            </div>

            <div class="content">
                <h3><?php echo$row['p_name']?></h3>
                <div class="price">$<?php  echo$row['p_price']?> <span>$399.99</span></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>
<?php }     ?>






       <!--   <div class="box">
            <div class="images">
                <img src="images/product-2.jpg" class="main-img">
                 <img src="images/product-2-hover.jpg" class="hover-img">

                 <div class="icon">
                     <a href="" class="fas fa-shopping-cart"></a>
                     <a href="" class="fas fa-search-plus"></a>
                     <a href="" class="fas fa-heart"></a>
                     <a href="" class="fas fa-share"></a>
                 </div>
            </div>

            <div class="content">
                <h3>camera</h3>
                <div class="price">$249.99 <span>$399.99</span></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

         <div class="box">
            <div class="images">
                <img src="images/product-3.jpg" class="main-img">
                 <img src="images/product-3-hover.jpg" class="hover-img">

                 <div class="icon">
                     <a href="" class="fas fa-shopping-cart"></a>
                     <a href="" class="fas fa-search-plus"></a>
                     <a href="" class="fas fa-heart"></a>
                     <a href="" class="fas fa-share"></a>
                 </div>
            </div>

            <div class="content">
                <h3>tevivsion</h3>
                <div class="price">$249.99 <span>$399.99</span></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>


         <div class="box">
            <div class="images">
                <img src="images/product-4.jpg" class="main-img">
                 <img src="images/product-4-hover.jpg" class="hover-img">

                 <div class="icon">
                     <a href="" class="fas fa-shopping-cart"></a>
                     <a href="" class="fas fa-search-plus"></a>
                     <a href="" class="fas fa-heart"></a>
                     <a href="" class="fas fa-share"></a>
                 </div>
            </div>

            <div class="content">
                <h3>spaeker</h3>
                <div class="price">$249.99 <span>$399.99</span></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

         <div class="box">
            <div class="images">
                <img src="images/product-5.jpg" class="main-img">
                 <img src="images/product-5-hover.jpg" class="hover-img">

                 <div class="icon">
                     <a href="" class="fas fa-shopping-cart"></a>
                     <a href="" class="fas fa-search-plus"></a>
                     <a href="" class="fas fa-heart"></a>
                     <a href="" class="fas fa-share"></a>
                 </div>
            </div>

            <div class="content">
                <h3>speaker</h3>
                <div class="price">$249.99 <span>$399.99</span></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

         <div class="box">
            <div class="images">
                <img src="images/product-6.jpg" class="main-img">
                 <img src="images/product-6-hover.jpg" class="hover-img">

                 <div class="icon">
                     <a href="" class="fas fa-shopping-cart"></a>
                     <a href="" class="fas fa-search-plus"></a>
                     <a href="" class="fas fa-heart"></a>
                     <a href="" class="fas fa-share"></a>
                 </div>
            </div>

            <div class="content">
                <h3>smartwatch</h3>
                <div class="price">$249.99 <span>$399.99</span></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

         <div class="box">
            <div class="images">
                <img src="images/product-7.jpg" class="main-img">
                 <img src="images/product-7-hover.jpg" class="hover-img">

                 <div class="icon">
                     <a href="" class="fas fa-shopping-cart"></a>
                     <a href="" class="fas fa-search-plus"></a>
                     <a href="" class="fas fa-heart"></a>
                     <a href="" class="fas fa-share"></a>
                 </div>
            </div>

            <div class="content">
                <h3>haedphones</h3>
                <div class="price">$249.99 <span>$399.99</span></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

         <div class="box">
            <div class="images">
                <img src="images/product-8.jpg" class="main-img">
                <img src="images/product-8-hover.jpg" class="hover-img">

                <div class="icon">
                    <a href="" class="fas fa-shopping-cart"></a>
                    <a href="" class="fas fa-search-plus"></a>
                    <a href="" class="fas fa-heart"></a>
                    <a href="" class="fas fa-share"></a>
                </div>
            </div>

            <div class="content">
                <h3>smartphone</h3>
                <div class="price">$249.99 <span>$399.99</span></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div> -->

         
    </div>
    
</section>

<!-- products section ends -->



<!-- product banner section strats -->

<section class="product-banner">
    <h1 class="heading"> <span>deal</span> of the day</h1>
    <div class="box-container">
        <div class="box">
            <img src="images/product-banner-1.jpg">
            <div class="content">
                <span>special offer</span>
                <h3>upto 50%</h3>
                <a href="#" class="btn">shop now</a>
            </div>
        </div>

         <div class="box">
            <img src="images/product-banner-2.jpg">
            <div class="content">
                <span>special offer</span>
                <h3>upto 50%</h3>
                <a href="#" class="btn">shop now</a>
            </div>
        </div>
    </div>
</section>
<!-- product banner section ends -->











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