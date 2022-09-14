<?php
session_start();
$m_id=$_SESSION['m_id'];
$m_name=$_SESSION['m_name'];
$m_level=$_SESSION['m_level'];
include('../../condb.php');
$sql1="SELECT m_img from tbl_member where m_id='$m_id'";
$result1=mysqli_query($condb,$sql1)or die ('Error in query :$sql1'.mysql_error());
$row=mysqli_fetch_array($result1);
$m_img=$row['m_img'];

if ($m_level!='ADMIN') {
	header('location:../../loguot.php');
}
?>