<?php
$sql1="SELECT m_img from tbl_member where m_id='$m_id'";
$result1=mysqli_query($condb,$sql1)or die ('Error in query :$sql1'.mysql_error());
$row = mysqli_fetch_array($result1);
$m_img=$row['m_img'];

?>

<header class="main-header">
  <!-- Logo -->
  <a href="" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>Application</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>SYSTEM
    </b></span>
  </a>
  <!-- Header Navbar -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->
        
        <!-- User Account Menu -->
        <li class="dropdown user user-menu">
          <!-- Menu Toggle Button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <!-- The user image in the navbar-->
            <?php
            if (empty($m_img)) {
               echo " <img src='../dist/img/user2-160x160.jpg' class='user-image' alt='User Image'> "; 
            }else{
               echo "<img src='../member_img/$m_img' class='user-image' alt='User Image'>";
            }
            ?><!-- hidden-xs hides the username on small devices so only the image appears. -->
            <span class="hidden-xs"></span>
          </a>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <li>
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>
      </ul>
    </div>
  </nav>
</header>