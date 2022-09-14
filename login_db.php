<?php
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit();
//ປະກາດ session_start ເພື່ອເກັບຂໍ້ມູນ
session_start();
//Chek ວ່າມີຂໍ້ມູນມາບໍ
	if (isset($_POST['login'])) {
		include('condb.php');

		//ສ້າງຕົວແປມາເກັບຂໍ້ມູນ
		$m_username=$_POST['m_username'];
		$m_password= md5($_POST['m_password']);

		// echo $m_username;
		// exit();

		//ເອົາຂໍ້ມູນຂອງຄົນທີ່loginເຂົ້າອອກມາ
		$sql="SELECT * FROM tbl_member
		WHERE m_username='".$m_username."'
		AND m_password='".$m_password."'";

		$result=mysqli_query($condb,$sql);

		//chek ວ່າມີUser ຢູ່ໃນລະບົບບໍ່ 
		if(mysqli_num_rows($result)==1){



			$row=mysqli_fetch_array($result);

			$_SESSION['m_name']=$row['m_fname'];
			$_SESSION['m_id']=$row['m_id'];
			$_SESSION['m_level']=$row['m_level'];

			if ($_SESSION['m_level']=="ADMIN") {
				header("location:Admin/admin/");
			}
			if ($_SESSION['m_level']=="MEMBER") {
				header("location:Admin/member/");
			}
		}

		else{
		echo "<script>";
    	echo "alert('\"password or username !ບໍ່ຖືກຕ້ອງ\"');";
    	echo "window.location='login.php'";
    	echo "</script>";
		}
	}else{header("window .history.back()");}
?>