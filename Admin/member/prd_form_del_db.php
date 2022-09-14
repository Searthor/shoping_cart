<?php
include('../../condb.php');
// echo "<pre>";
// print_r($_GET);
// echo "</pre>";
// exit();
    $p_id=$_GET['ID'];
    

    
    $sql="DELETE from tbl_prd 
    WHERE p_id='$p_id'";
    
    
    $result=mysqli_query($condb,$sql)or die("Error:".mysqli_error($condb));

    mysqli_close($condb);

    if ($result) {
    	echo "<script>";
    	echo "alert('ລົບຂໍ້ມູນສຳເລັດ');";
    	echo "window.location='prd.php'";
    	echo "</script>";

    }else{
    	echo "<script>";
    	echo "alert('error')";
    	echo "window.location='form.php?p=add'";
    	echo "</script>";

    }


?>