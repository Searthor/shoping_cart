<?php
include('../../condb.php');
echo "<pre>";
print_r($_POST);
echo "</pre>";
// exit();

    $m_name=$_POST['emp_mtitle'];
    $m_fname=$_POST['emp_name'];
    $m_lname=$_POST['emp_lastname'];
    $m_email=$_POST['emp_email'];
    $m_phone=$_POST['emp_tel'];
    $m_username=$_POST['emp_username'];
    $m_password=md5($_POST['emp_password']);

    $date1=date('Ymd_His');
    $numrand=(mt_rand());
    $p_img=(isset($_POST['p_img'])? $_POST['m_img'] : '');
    $upload=$_FILES['m_img']['name'];
    if($upload!=''){
        $path="../member_img/";
        $type=strrchr($_FILES['m_img']['name'],".");
        $newname=$numrand.$date1.$type;
        $path_copy=$path.$newname;
        $path_link="../member_img/".$newname;
        move_uploaded_file($_FILES['m_img']['tmp_name'], $path_copy);
    }




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
    	echo "window.location='form.php?p=add'";
    	echo "</script>";


    }else{
    
    $sql="INSERT INTO tbl_member (
    m_username,
    m_password,
    m_name,
    m_fname,
    m_lname,
    m_email,
    m_phone,
    m_img)
    VALUES(
    '$m_username',
    '$m_password',
    '$m_name',
    '$m_fname',
    '$m_lname',
    '$m_email',
    '$m_phone',
    '$newname')";
    $result=mysqli_query($condb,$sql)or die("Error:".mysqli_error($condb));
}

    mysqli_close($condb);

    if ($result) {
    	echo "<script>";
    	echo "alert('ເພີ່ມຂໍ້ມູນສຳເລັດ');";
    	echo "window.location='member.php'";
    	echo "</script>";

    }else{
    	echo "<script>";
    	echo "alert('error')";
    	echo "window.location='form.php?p=add'";
    	echo "</script>";

    }


?>