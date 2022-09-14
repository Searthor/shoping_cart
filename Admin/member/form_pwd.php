<?php

// print_r($_SESSION);
$m_id=$_SESSION['m_id'];
// echo $m_id;

?>
<form action="emp_pwd_db.php" method="POST"   name="add" class="form-horizontal" id="add">
  <div class="form-group">
    <div class="col-sm-2" align="right"></div>
    <div class="col-sm-5" align="left"> <h3><i class="fas fa-cog"></i> ແກ້ໄຂ Password  </h3> </div>
  </div>
  <div class="form-group has-warning">
    <div class="col-sm-2" align="right"> </div>
    <div class="col-sm-5" align="left">
      <b> ລະຫັດຜ່ານເກົ່າ</b>
      <input  name="m_password1" type="password" required class="form-control"  placeholder="ລະຫັດຜ່ານເກົ່າ" pattern="^[a-zA-Z0-9]+$" title="ພາສາອັງກິດ ຫຼື ຕົວເລກເທົ່ານັ້ນ" minlength="1" id="inputWarning" />
    </div>
  </div>
  <div class="form-group has-success">
    <div class="col-sm-2" align="right"> </div>
    <div class="col-sm-5" align="left">
      <b> ລະຫັດຜ່ານໃຫມ່ </b>
      <input  name="m_password2" type="password" required class="form-control"  placeholder="ລະຫັດຜ່ານໃຫມ່" pattern="^[a-zA-Z0-9]+$" title="ພາສາອັງກິດ ຫຼື ຕົວເລກເທົ່ານັ້ນ" minlength="2" id="inputSuccess"/>
    </div>
  </div>
  <div class="form-group has-success">
    <div class="col-sm-2" align="right"> </div>
    <div class="col-sm-5" align="left">
      <b>  ຍືນຢັນລະຫັດຜ່ານໃຫມ່ </b>
      <input  name="m_password3" type="password" required class="form-control"  placeholder=" ຍືນຢັນລະຫັດຜ່ານໃຫມ່" pattern="^[a-zA-Z0-9]+$" title="ພາສາອັງກິດ ຫຼື ຕົວເລກເທົ່ານັ້ນ" minlength="2" id="inputSuccess"/>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2"> </div>
    <div class="col-sm-5">
      <input type="hidden" name="m_id" value="<?php echo $m_id;?>">
      <button type="submit" class="btn btn-primary" id="btn"> ບັນທຶກ
      </button>
    </div>
    
  </div>
</form>