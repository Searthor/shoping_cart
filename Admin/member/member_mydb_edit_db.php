<?php

include('../../condb.php');
echo "<pre>";
print_r($_POST);
echo "</pre>";
// exit();
    $m_name=$_POST['m_mtitle'];
    $m_fname=$_POST['m_name'];
    $m_lname=$_POST['m_lastname'];
    $m_email=$_POST['m_email'];
    $m_phone=$_POST['m_tel'];
    $m_username=$_POST['m_username'];
    $m_id=$_POST['m_id'];

     $date1=date('Ymd_His');
    $numrand=(mt_rand());
    $p_img=(isset($_POST['m_img'])? $_POST['m_img'] : '');
    $upload=$_FILES['m_img']['name'];
    if($upload!=''){
        $path="../member_img/";
        $type=strrchr($_FILES['m_img']['name'],".");
        $newname=$numrand.$date1.$type;
        $path_copy=$path.$newname;
        $path_link="../member_img/".$newname;
        move_uploaded_file($_FILES['m_img']['tmp_name'], $path_copy);
    }else{
        $newname=$p_img2;
    }
  
    
    $sql="UPDATE tbl_member SET
    m_username='$m_username',
    m_name='$m_name',
    m_fname='$m_fname',
    m_lname='$m_lname',
    m_email='$m_email',
    m_phone='$m_phone',
    m_img='$newname'
    where m_id='$m_id'";
    $result=mysqli_query($condb,$sql)or die("Error:".mysqli_error($condb));

    mysqli_close($condb);

    if ($result) {
    	echo "<script>";
    	echo "alert('ແກ້ໄຂຂໍ້ມູນສຳເລັດ');";
    	echo "window.location='member.php?p=me'";
    	echo "</script>";

    }else{
    	echo "<script>";
    	echo "alert('error')";
    	echo "window.location='form.php?p=add'";
    	echo "</script>";

    }



?>