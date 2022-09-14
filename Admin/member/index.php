<?php 

include('css.php');
include('headers.php');
// print_r($_SESSION);
// echo $m_id;


// echo $m_img;


?>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <!-- Main Header -->
    <?php include('menutop.php');?>
    <!-- Left side column. contains the logo and sidebar -->
    <div class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
          <div class="pull-left image">
          <?php
            if (empty($m_img)) {
               echo " <img src='../dist/img/user2-160x160.jpg' class='img-circle' alt='User Image'> ";
             
            }else{
               echo "<img src='../member_img/$m_img' class='img-circle' alt='User Image'>";
            }


            ?>
            
          </div>
          <div class="pull-left info">
            <p>ທ່ານ : 
              <?php echo ' '.$m_name ?></p>
            <!-- Status -->
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <?php include('menu_l.php');?>
      </section>
      <!-- /.sidebar -->
    </div>
      <div class="content-wrapper">
      <section class="content-header">
        <h1 align="center">
        ຍິນດີຕ້ອນຮັບ
        </h1>
      </section>
    
    </div>
</body>
  <?php include('footerjs.php');?>