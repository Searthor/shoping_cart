<?php
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

include('../../condb.php');
$m_id=$_POST['m_id'];
$password1=md5($_POST['m_password1']);
$password2=md5($_POST['m_password2']);
$password3=md5($_POST['m_password3']);
// echo $password1;
// echo "<br>";
// echo $m_id;
// exit();
$sql1="SELECT m_password from tbl_member where m_id='$m_id'";
$result1=mysqli_query($condb,$sql1)or die ('Error in query :$sql1'.mysql_error());
$row=mysqli_fetch_array($result1);
$password=$row['m_password'];
// echo $password ;
// exit();


if($password2!=$password3 or $password1!=$password ){
		echo "<script>";
    	echo "alert('password do not match');";
    	echo "window.location='member.php?p=pwd'";
    	echo "</script>";
}
else{
	$sql="UPDATE tbl_member SET
	m_password='$password2'
	WHERE m_id ='$m_id'
	AND m_password='$password1'";
	$result=mysqli_query($condb,$sql)or die("Error in query :$sql" .mysql_error());
	// echo $sql;
}
mysql_close($condb);

if ($result) {

	echo "<script>";
    echo "alert('ແກ້ໄຂ password ສຳເລັດແລ້ວ');";
    echo "window.location='index.php'";
    echo "</script>";
}else{
	echo "<script>";
    echo "alert('Error');";
    echo "window.location='form.php?p=pwd'";
    echo "</script>";
}


?>