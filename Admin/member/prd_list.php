<?php

include('../../condb.php');



$query="SELECT p.*,m.m_fname,t.t_name
FROM tbl_prd as p
LEFT JOIN tbl_member as m on p.ref_m_id=m.m_id
LEFT join tbl_prd_type as t on p.ref_t_id=t.t_id
where ref_m_id='$m_id';
";
// echo $query;





echo "<h1>Form prd <a href='prd.php?p=add' class='btn btn-success btn-sm'>+add</a></h1>";
$resulf=mysqli_query($condb,$query);
echo "<table id='example1' class='display table table-bordered  table-hover table-striped'>";
echo "<thead>
    <tr class='danger'>
      <th><center>ID</center></th>
      <th>ຮູບສິນຄ້າ</th>
      <th>ປະເພດສິນຄ້າ</th>
      <th>ຊື່ສິນຄ້າ</th>
      <th>ລາຄາ</th>
      <th>ເພີ່ມໂດຍ</th>
      <th>ແກ້ໄຂ</th>
      <th>ລົບ</th>
    </tr>
  </thead>";
  $i=1;
  while ($row=mysqli_fetch_array($resulf)) {
    echo "<tr>";
    echo "<td >" .$i."</td>";
    echo "<td >" ."<img src='../prd_img/".$row['p_img'] ."'width='100' height='100'>"."</td>";
    echo "<td >" .$row['t_name']."</td>";
    echo "<td >" .$row['p_name']."</td>";
    echo "<td >" .$row['p_price']."</td>";
    echo "<td >" .$row['m_fname']."</td>";

    echo "<td align='center'> <a href='prd.php?ID=$row[0]&p=edit' class='btn btn-warning btn=xs'>ແກ້ໄຂ</a></td>";


    echo "<td align='center'> <a href='prd_form_del_db.php?ID=$row[0]'
    onclick=\"return confirm('Do you want to delete this record?')\"
     class='btn btn-danger btn=xs'>ລົບ</a></td>";
    echo "</tr>";
    $i++;
  }
  echo "</table>";

?>