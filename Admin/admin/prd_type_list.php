<?php

include('../../condb.php');


$query="SELECT *
FROM tbl_prd_type
";
// echo $query;





echo "<h1>ປະເພດສິນຄ້າ <a href='prd_type.php?p=add' class='btn btn-success btn-sm'>+add</a></h1>";
$resulf=mysqli_query($condb,$query);
echo "<table id='example1' class='table table-bordered  table-hover table-striped'>";
echo "<thead>
    <tr class='danger'>
      <th><center>ID</center></th>
      <th>ປະເພດສິນຄ້າ</th>
      <th>ແກ້ໄຂ</th>
      <th>ລົບ</th>
    </tr>
  </thead>";
  $i=1;
  while ($row=mysqli_fetch_array($resulf)) {
    echo "<tr>";
    echo "<td >" .$i."</td>";
    echo "<td >" .$row['t_name']."</td>";

    echo "<td align='center'> <a href='prd_type.php?ID=$row[0]&p=edit' class='btn btn-warning btn=xs'>ແກ້ໄຂ</a></td>";


    echo "<td align='center'> <a href='prd_type_form_del_db.php?ID=$row[0]'
    onclick=\"return confirm('Do you want to delete this record?')\"
     class='btn btn-danger btn=xs'>ລົບ</a></td>";
    echo "</tr>";
    $i++;
  }
  echo "</table>";

?>