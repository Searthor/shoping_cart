<?php
$sql="SELECT * from tbl_member
where m_id='$m_id'";
$result=mysqli_query($condb,$sql);
$row = mysqli_fetch_array($result);
// echo "<pre>";
// print_r($row);
// echo "</pre>";
?>


<form action="member_mydb_edit_db.php" method="POST"   name="add" class="form-horizontal" id="add" enctype="multipart/form-data">
  <div class="form-group">
    <div class="col-sm-2" align="right"></div>
    <div class="col-sm-5" align="left"> <h3><i class="fas fa-user"></i> ຂໍ້ມູນສ່ວນຕົວ </h3> <hr/></div>
  </div>
  <div class="form-group">
    <div class="col-sm-1" align="right"> </div>
    <div class="col-sm-2" align="left">
      <b> ຄຳນຳຊື່</b>
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
      <b>ຊື່</b>
      <input  name="m_name" type="text" required class="form-control"      minlength="2" value="<?php echo $row['m_fname'];?>" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-1" align="right"> </div>
    <div class="col-sm-5" align="left">
      <b> ນາມສະກຸນ</b>
      <input  name="m_lastname" type="text" required class="form-control"   minlength="2" value="<?php echo $row['m_lname'];?>" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-1" align="right">  </div>
    <div class="col-sm-7" align="left">
      <b>Email</b>
      <input  name="m_email" type="email"  class="form-control" required value="<?php echo $row['m_email'];?>" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-1" align="right"> </div>
    <div class="col-sm-7" align="left">
      <b> ເບີໂທ</b>
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
      <b>ຮູບ </b>
      <img src="../member_img/<?php echo$row['m_img']; ''?>" width="150">
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
      <input type="hidden" name="m_id" value="<?php echo $m_id;?>">
      <button type="submit" class="btn btn-primary" id="btn">ບັນທຶກ
      </button>
    </div>
  </div>
</form>