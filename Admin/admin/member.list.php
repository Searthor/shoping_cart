<?php

include('../../condb.php');
// session_start();
// echo $m_id;


$query="SELECT * FROM tbl_member where m_id !='$m_id' ORDER BY m_id asc " or die("Error :".mysql_error());
echo "<h1>ສາມາສິກ <a href='member.php?p=add' class='btn btn-success btn-sm'>+add</a></h1>";
$resulf=mysqli_query($condb,$query);
echo "<table id='example1' class='table table-bordered  table-hover table-striped'>";
echo "<thead>
    <tr class='danger'>
      <th><center>ID</center></th>
      <th>username</th>
      <th>mtitle</th>
      <th>fname</th>
      <th>lname</th>
      <th>Email</th>
      <th>phone</th>
      <th>ແກ້ໄຂ</th>
      <th>ລົບ</th>
    </tr>
  </thead>";
  $i=1;
  while ($row=mysqli_fetch_array($resulf)) {

    echo "<tr>";
    echo "<td >" .$i."</td>";
    echo "<td >" .$row['m_username']."</td>";
    echo "<td >" .$row['m_name']."</td>";
    echo "<td >" .$row['m_fname']."</td>";
    echo "<td >" .$row['m_lname']."</td>";
    echo "<td >" .$row['m_email']."</td>";
    echo "<td >" .$row['m_phone']."</td>";
    echo "<td align='center'> <a href='member.php?ID=$row[0]&p=edit' class='btn btn-warning btn=xs'>ແກ້ໄຂ</a></td>";


    echo "<td align='center'> <a href='form_delete_db.php?ID=$row[0]'
    onclick=\"return confirm('Do you want to delete this record?')\"
     class='btn btn-danger btn=xs'>ລົບ</a></td>";
    echo "</tr>";
    $i++;
  }
  echo "</table>";

?>