<?php
include('../../condb.php');
// echo "<pre>";
// print_r($_GET);
// echo "</pre>";
// exit();
    $t_id=$_GET['ID'];
    

    
    $sql="DELETE from tbl_prd_type
    WHERE t_id='$t_id'";
    
    
    $result=mysqli_query($condb,$sql)or die("Error:".mysqli_error($condb));

    mysqli_close($condb);

    if ($result) {
    	echo "<script>";
    	echo "alert('ລົບຂໍ້ມູນສຳເລັດ');";
    	echo "window.location='prd_type.php'";
    	echo "</script>";

    }else{
    	echo "<script>";
    	echo "alert('error')";
    	echo "window.location='form.php?p=add'";
    	echo "</script>";

    }


?>