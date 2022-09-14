<?php

$ID=$_GET['ID'];

$sql="SELECT * from tbl_prd as p
INNER JOIN tbl_prd_type as t on p.ref_t_id=t.t_id
where p.p_id='$ID'";
$result=mysqli_query($condb,$sql);
$row = mysqli_fetch_array($result);
extract($row);
$ref_t_id=$row['ref_t_id'];


// echo "<pre>";
// print_r($row);
// echo "</pre>";



$query="SELECT * from tbl_prd_type
Where t_id !=$ref_t_id"
or die ("Error :".mysql_error());
$result2=mysqli_query($condb,$query);
// echo $query;

?>




<form action="prd_form_edit_db.php" method="POST"   name="add" class="form-horizontal" id="add" enctype="multipart/form-data">
  <div class="form-group">
    <div class="col-sm-2" align="right"></div>
    <div class="col-sm-5" align="left"> <h3><i class="fas fa-user"></i> FORM ADD </h3> <hr/></div>
  </div>
  <div class="form-group">
    <div class="col-sm-1" align="right"> </div>
    <div class="col-sm-2" align="left">
      <select name="ref_t_id" class="form-control" required>

        <option value="<?php echo$row['ref_t_id'];''?>">
        <?php echo$row['t_name']; ''?></option>

        <?php foreach ($result2 as$results) {?>
        <option value="<?php  echo$results["t_id"];?>">-<?php echo $results["t_name"];?>
        </option>
       <?php } ?>
        
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-1" align="right"> </div>
    <div class="col-sm-5" align="left">
      <b> ຊື່ສິນຄ້າ</b>
      <input  name="p_name" type="text" required class="form-control"   minlength="2" value="<?php echo$row['p_name']?>" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-1" align="right"> </div>
    <div class="col-sm-5" align="left">
      <b> ລາຍລະອຽດສິນຄ້າ</b>
      <textarea name="p_detail" class="form-control" required><?php echo$row['p_detail']?></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-1" align="right">  </div>
    <div class="col-sm-5" align="left">
      <b>ລາຄາ </b>
      <input  name="p_price" type="number"  class="form-control" required value="<?php echo$row['p_price']?>"/>
    </div>
  </div>
   <div class="form-group">
    <div class="col-sm-1" align="right">  </div>
    <div class="col-sm-5" align="left">
      <b>ຮູບສິນຄ້າເກົ່າ </b>
      <img src="../prd_img/<?php echo$row['p_img']; ''?>" width="150">
    </div>
  </div>
   <div class="form-group">
    <div class="col-sm-1" align="right">  </div>
    <div class="col-sm-5" align="left">
      <b>ຮູບສິນຄ້າໃຫມ່ </b>
      <input  name="p_img" type="file"  class="form-control"   accept="image/*" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-1"> </div>
    <div class="col-sm-5">
      <input type="hidden" name="p_img2" value="<?php echo$row['p_img']?>">
      <input type="hidden" name="p_m_edit_date"
       value="<?php echo date('Y-m-d h:i:s');?>">
      <input type="hidden" name="p_id" value="<?php echo$row['p_id']?>">
      <input type="hidden" name="ref_m_id" value="<?php echo$m_id?>">
      <button type="submit" class="btn btn-primary" id="btn">ແກ້ໄຂຂໍ້ມູນ
      </button>
    </div>
  </div>
</form>