<?php
include('condb.php');
$c_ipadr= $_SERVER['REMOTE_ADDR'];
// echo $c_ipadr;
$sqlc="INSERT INTO tbl_counter
(c_ipadr) VALUES('$c_ipadr')";

$result=mysqli_query($condb,$sqlc) or die('Error in query: sqlc'.mysql_error());
?>