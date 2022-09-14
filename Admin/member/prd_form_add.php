<?php
include('../../condb.php');
$query="SELECT * from tbl_prd_type" or die("Error : ".mysql_error());
$result=mysqli_query($condb,$query);
?>



<form action="prd_form_add_db.php" method="POST"   name="add" class="form-horizontal" id="add" enctype="multipart/form-data">
  <div class="form-group">
    <div class="col-sm-2" align="right"></div>
    <div class="col-sm-5" align="left"> <h3><i class="fas fa-user"></i> FORM ADD </h3> <hr/></div>
  </div>
  <div class="form-group">
    <div class="col-sm-1" align="right"> </div>
    <div class="col-sm-2" align="left">
      <select name="ref_t_id" class="form-control" required>
        <option value="">-ເລືອກປະເພດສິນຄ້າ-</option>
       <?php foreach ($result as$results) {?>
        <option value="<?php  echo$results['t_id'];?>">-<?php echo $results['t_name']?></option>

        
       <?php } ?>
        
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-1" align="right"> </div>
    <div class="col-sm-5" align="left">
      <b> ຊື່ສິນຄ້າ</b>
      <input  name="p_name" type="text" required class="form-control"   minlength="2" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-1" align="right"> </div>
    <div class="col-sm-5" align="left">
      <b> ລາຍລະອຽດສິນຄ້າ</b>

      <textarea name="p_detail" class="form-control" required></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-1" align="right">  </div>
    <div class="col-sm-5" align="left">
      <b>ລາຄາ </b>
      <input  name="p_price" type="number"  class="form-control" required />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-1" align="right">  </div>
    <div class="col-sm-5" align="left">
      <b>ຮູບສິນຄ້າ </b>
      <input  name="p_img" type="file"  class="form-control" required  accept="image/*" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-1"> </div>
    <div class="col-sm-5">
      <input type="hidden" name="ref_m_id" value="<?php echo$m_id?>">
      <button type="submit" class="btn btn-primary" id="btn">ເພີ່ມຂໍ້ມູນ
      </button>
    </div>
  </div>
</form>