
<link rel="stylesheet" type="text/css" href="Admin/css/style.css">
<form action="resgister_db.php" method="POST" class="login">
	<h1>form resgister</h1>
	<select name="m_mtitle" class="form-control">
        <option value="">-ຄຳນຳຊື່-</option>
        <option value="MR.">Mr.</option>
        <option value="Miss">Miss</option> 
    </select>
	<input type="text" name="m_name" placeholder="name" required>
	<input type="text" name="m_lastname" placeholder="lastname" required>
	<input type="email" name="m_email" placeholder="email" required>
	<input type="text" name="m_tel" placeholder="tel" required>
	<input type="text" name="m_username" placeholder="username" required>
	<input type="password" name="m_password" placeholder="password" required>
	<input type="submit" value="ລົງທະບຽນ" class="btn">
	<p>ຍັງບໍ່ເປັນສາມາສິດແມ່ນບໍ? <a href="login.php">..ລົງທະບຽນ..</a></p>
</form>

