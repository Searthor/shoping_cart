<form action="member_form_add_db.php" method="POST"   name="add" class="form-horizontal" id="add"  enctype="multipart/form-data">
  <div class="form-group">
    <div class="col-sm-2" align="right"></div>
    <div class="col-sm-5" align="left"> <h3><i class="fas fa-user"></i> FORM ADD </h3> <hr/></div>
  </div>
  <div class="form-group">
    <div class="col-sm-1" align="right"> </div>
    <div class="col-sm-2" align="left">
      <b> ຄຳນຳຊື່</b>
      <select name="emp_mtitle" class="form-control">
        <option value="">-ເລືອກຂໍ້ມູນ-</option>
        <option value="MR.">Mr.</option>
        <option value="Miss">Miss</option>
        
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-1" align="right"> </div>
    <div class="col-sm-5" align="left">
      <b>ຊື່</b>
      <input  name="emp_name" type="text" required class="form-control"   minlength="2" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-1" align="right"> </div>
    <div class="col-sm-5" align="left">
      <b> ນາມສະກຸນ</b>
      <input  name="emp_lastname" type="text" required class="form-control"   minlength="2" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-1" align="right">  </div>
    <div class="col-sm-7" align="left">
      <b>Email</b>
      <input  name="emp_email" type="email"  class="form-control" required />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-1" align="right"> </div>
    <div class="col-sm-7" align="left">
      <b> ເບີໂທ</b>
      <input  name="emp_tel" type="text" required class="form-control"  minlength="2" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-1" align="right">   </div>
    <div class="col-sm-4" align="left">
      <b> Username</b>
      <input  name="emp_username" type="text" required class="form-control"  minlength="2"/>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-1" align="right"> </div>
    <div class="col-sm-4" align="left">
      <b> Password </b>
      <input  name="emp_password" type="password" required class="form-control"  minlength="2" />
    </div>
  </div>
    <div class="form-group">
    <div class="col-sm-1" align="right">  </div>
    <div class="col-sm-5" align="left">
      <b>ຮູບ </b>
      <input  name="m_img" type="file"  class="form-control" required  accept="image/*" />
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