<?php include('css.php');
include('headers.php');



$m_id=$_SESSION['m_id'];
// include('../../condb.php');



// echo $sql1;
?>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <!-- Main Header -->
    <?php include('menutop.php');?>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
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
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content-header">
        <h1>
        ::ສະບາຍ::
        
        </h1>
      </section>
      <section class="content">
        <div class="row">
          <div class="col-md-12">

            <div class="box">
              <div class="row">
                <div class="col-sm-12">
                  <div class="box-body">
                <?php 
                    $p=(isset($_GET['p'])? $_GET['p']: '');
                  if($p=='add'){
                    include('form_add.php');
                  }elseif($p=='pwd'){
                     include('form_pwd.php');
                  }elseif($p=="me"){
                    include('form_mydb.php');
                  }
                  elseif($p=="edit"){
                    include('form_edit.php');
                  }else{
                    include('member.list.php');
                  }

                  ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div> 
    </body>
  </html>
  <?php include('footerjs.php');?>