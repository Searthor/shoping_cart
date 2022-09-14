<?php
include('../../condb.php');
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit();
    $t_name=$_POST['t_name'];
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
    
    $sql2="INSERT INTO tbl_prd_type(
    t_name)VALUES('$t_name')";
    $result=mysqli_query($condb,$sql2)or die("Error:".mysqli_error($condb));
}

    mysqli_close($condb);

    if ($result) {
    	echo "<script>";
    	echo "alert('ເພີ່ມຂໍ້ມູນສຳເລັດ');";
    	echo "window.location='prd_type.php'";
    	echo "</script>";

    }else{
    	echo "<script>";
    	echo "alert('error')";
    	echo "window.location='form.php?p=add'";
    	echo "</script>";

    }


?>