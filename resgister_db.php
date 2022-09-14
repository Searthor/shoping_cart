<?php
include('condb.php');
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit();
    $m_name=$_POST['m_mtitle'];
    $m_fname=$_POST['m_name'];
    $m_lname=$_POST['m_lastname'];
    $m_email=$_POST['m_email'];
    $m_phone=$_POST['m_tel'];
    $m_username=$_POST['m_name'].$_POST['m_lastname'];
    $m_password=md5($_POST['m_password']);

    // echo $m_username;
    // exit();


    $check="SELECT m_username,m_email FROM tbl_member
    WHERE m_username='$m_username'OR m_email='$m_email'";

    //echo $check;
    
    $result1=mysqli_query($condb,$check);
    $num =mysqli_num_rows($result1);
    // echo $num;
    //exit();

    if($num>0){
    	echo "<script>";
    	echo "alert('ຂໍ້ມູນຊໍ່້າ! ກະລຸນາເພີ່ມໃໝ່ອີກຄັ້ງ');";
    	echo "window.location='resgister.php'";
    	echo "</script>";
    }else
    
    $sql="INSERT INTO tbl_member (
    m_username,
    m_password,
    m_name,
    m_fname,
    m_lname,
    m_email,
    m_phone)
    VALUES(
    '$m_username',
    '$m_password',
    '$m_name',
    '$m_fname',
    '$m_lname',
    '$m_email',
    '$m_phone')";
    $result=mysqli_query($condb,$sql)or die("Error:".mysqli_error($condb));

    mysqli_close($condb);

    if ($result) {
    	echo "<script>";
    	echo "alert('ເພີ່ມຂໍ້ມູນສຳເລັດ');";
    	echo "window.location='login.php'";
    	echo "</script>";

    }else{
    	echo "<script>";
    	echo "alert('error')";
    	echo "window.location='form.php?p=add'";
    	echo "</script>";

    }


?>