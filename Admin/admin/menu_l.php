
<?php
// session_start();
?>

<ul class="sidebar-menu" data-widget="tree">
  <li>
    <a href="index.php">
      <i class="fa fa-home"></i> <span>ໜ້າຫຼັກ</span>
    </a>
  </li>
  <li>
    <a href="member.php"><i class="fa fa-inbox"></i>
      <span>ສາມາສິກ</span>
    </a>
  </li> 
   <li>
    <a href="prd.php"><i class="fa fa-inbox"></i>
      <span>ສິນຄ້າ</span>
    </a>
  </li>
    <li>
    <a href="prd_type.php"><i class="fa fa-inbox"></i>
      <span>ປະເພດສິນຄ້າ</span>
    </a>
  </li>
  <li class="active">
    <a href=""><i class="fa fa-user"></i> <span>ຂໍ້ມູນສ່ວນຕົວ</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-down pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="member.php?p=pwd"> <i class="fa fa-file"></i> -Password</a></li>
    <li><a href="member.php?p=me"> <i class="fa fa-file"></i>  -ຂໍ້ມູນສ່ວນຕົວ</a></li>
    </ul>
  </li>
  
  <li>
    <a href="../../loguot.php" onclick="return confirm('ຕ້ອງການອອກຈາກລະບົບຫຼືບໍ')"><i class="fa fa-sign-out"></i>
      <span>ອອກຈາກລະບົບ</span>
    </a>
  </li>
</ul>