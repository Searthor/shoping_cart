<?php

$ID=$_GET['ID'];

$sql="SELECT * from tbl_member
where m_id='$ID'";
$result=mysqli_query($condb,$sql);
$row = mysqli_fetch_array($result);
// echo "<pre>";
// print_r($row);
// echo "</pre>";
?>


<form action="form_edit_db.php" method="POST"   name="add" class="form-horizontal" id="add"enctype="multipart/form-data" >
  <div class="form-group">
    <div class="col-sm-2" align="right"></div>
    <div class="col-sm-5" align="left"> <h3><i class="fas fa-user"></i> form ແກ້ໄຂ</h3> <hr/></div>
  </div>
  <div class="form-group">
    <div class="col-sm-1" align="right"> </div>
    <div class="col-sm-2" align="left">
      <b> คำนำชื่อ</b>
      <select name="m_mtitle" class="form-control">
        <option value="<?php echo $row['m_name'];?>"><?php echo $row['m_name'];?></option>
        <option value="MR.">Mr.</option>
        <option value="Miss">Miss</option>
        
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-1" align="right"> </div>
    <div class="col-sm-5" align="left">
      <b> ชื่อ</b>
      <input  name="m_name" type="text" required class="form-control"  placeholder="ชื่อ "    minlength="2" value="<?php echo $row['m_fname'];?>" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-1" align="right"> </div>
    <div class="col-sm-5" align="left">
      <b> นามสกุล</b>
      <input  name="m_lastname" type="text" required class="form-control"   minlength="2" value="<?php echo $row['m_lname'];?>" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-1" align="right">  </div>
    <div class="col-sm-7" align="left">
      <b>อีเมล์ </b>
      <input  name="m_email" type="email"  class="form-control" required value="<?php echo $row['m_email'];?>" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-1" align="right"> </div>
    <div class="col-sm-7" align="left">
      <b> เบอร์โทร</b>
      <input  name="m_tel" type="text" required class="form-control"  placeholder="เบอร์โทร"   minlength="2" value="<?php echo $row['m_phone'];?>" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-1" align="right">   </div>
    <div class="col-sm-4" align="left">
      <b> Username</b>
      <input  name="m_username" type="text" required class="form-control"  minlength="2"
      value="<?php echo $row['m_username'];?>" />
    </div>
  </div>
   <div class="form-group">
    <div class="col-sm-1" align="right">  </div>
    <div class="col-sm-5" align="left">
      <b>ຮູບເກົ່າ </b>
      <img src="../prd_img/<?php echo$row['m_img']; ''?>" width="150">
    </div>
  </div>
   <div class="form-group">
    <div class="col-sm-1" align="right">  </div>
    <div class="col-sm-5" align="left">
      <b>ຮູບໃຫມ່ </b>
      <input  name="m_img" type="file"  class="form-control"   accept="image/*" />
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-1"> </div>
    <div class="col-sm-5">
      <input type="hidden" name="p_img2" value="<?php echo$row['m_img']?>">
      <input type="hidden" name="ID" value="<?php echo $ID;?>">
      <button type="submit" class="btn btn-primary" id="btn">ບັນທຶກ
      </button>
    </div>
  </div>
</form>