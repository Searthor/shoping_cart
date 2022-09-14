<?php
include('../../condb.php');
$query="SELECT * from tbl_prd_type" or die("Error : ".mysql_error());
$result=mysqli_query($condb,$query);
?>



<form action="prd_type_form_add_db.php" method="POST"   name="add" class="form-horizontal" id="add">
  <div class="form-group">
    <div class="col-sm-2" align="right"></div>
    <div class="col-sm-5" align="left"> <h3><i class="fas fa-user"></i> FORM ADD </h3> <hr/></div>
  </div>
  

  <div class="form-group">
    <div class="col-sm-1" align="right">  </div>
    <div class="col-sm-8" align="left">
      <b> ຊື່ປະເພດສິນຄ້າ </b>
      <input  name="t_name" type="text"  class="form-control" required />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-1"> </div>
    <div class="col-sm-5">
      <button type="submit" class="btn btn-primary" id="btn">ເພີ່ມຂໍ້ມູນ
      </button>
    </div>
  </div>
</form>