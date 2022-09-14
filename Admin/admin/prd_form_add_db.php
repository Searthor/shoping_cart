<?php
include('../../condb.php');
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit();
  

    $ref_t_id=$_POST['ref_t_id'];
    $p_name=$_POST['p_name'];
    $p_detail=$_POST['p_detail'];
    $p_price=$_POST['p_price'];
    $ref_m_id=$_POST['ref_m_id'];


    $date1=date('Ymd_His');
    $numrand=(mt_rand());
    $p_img=(isset($_POST['p_img'])? $_POST['p_img'] : '');
    $upload=$_FILES['p_img']['name'];
    if($upload!=''){
        $path="../prd_img/";
        $type=strrchr($_FILES['p_img']['name'],".");
        $newname=$numrand.$date1.$type;
        $path_copy=$path.$newname;
        $path_link="../prd_img/".$newname;
        move_uploaded_file($_FILES['p_img']['tmp_name'], $path_copy);
    }

    $sql="INSERT INTO tbl_prd (
    ref_t_id,
    p_name,
    p_detail,
    p_price,
    ref_m_id,
    p_img)
    VALUES(
    '$ref_t_id',
    '$p_name',
    '$p_detail',
    '$p_price',
    '$ref_m_id',
    '$newname')";
    $result=mysqli_query($condb,$sql)or die("Error:".mysqli_error($condb));

    mysqli_close($condb);

    if ($result) {
    	echo "<script>";
    	echo "alert('ເພີ່ມຂໍ້ມູນສຳເລັດ');";
    	echo "window.location='prd.php'";
    	echo "</script>";

    }else{
    	echo "<script>";
    	echo "alert('error')";
    	echo "window.location='form.php?p=add'";
    	echo "</script>";

    }


?>