<?php
include('../../condb.php');
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit();
    $t_name=$_POST['t_name'];
    $t_id=$_POST['t_id'];
    echo $t_name;

    $check="SELECT * FROM tbl_prd_type
    WHERE t_name='$t_name'";

    //echo $check;
    
    $result1=mysqli_query($condb,$check);
    $num =mysqli_num_rows($result1);
    // echo $num;
    // exit();

    if($num>0){
    	echo "<script>";
    	echo "alert('ຂໍ້ມູນຊໍ່້າ! ກະລຸນາເພີ່ມໃໝ່ອີກຄັ້ງ');";
    	echo "window.location='prd_type.php'";
    	echo "</script>";


    }else{
    
    $sql2="UPDATE tbl_prd_type set t_name='$t_name'
    where t_id='$t_id'";
    $result=mysqli_query($condb,$sql2)or die("Error:".mysqli_error($condb));
}

    mysqli_close($condb);

    if ($result) {
    	echo "<script>";
    	echo "alert('ແກ້ໄຂຂໍ້ມູນສຳເລັດ');";
    	echo "window.location='prd_type.php'";
    	echo "</script>";

    }else{
    	echo "<script>";
    	echo "alert('error')";
    	echo "window.location='form.php?p=add'";
    	echo "</script>";

    }


?>