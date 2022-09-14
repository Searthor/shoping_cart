<?php
include('../../condb.php');
$query="SELECT COUNT(c_id) as total,DATE_FORMAT(c_datesave, '%d-%m-%Y') as datesave
from tbl_counter
GROUP BY DATE_FORMAT(c_datesave,'%d%')
ORDER BY DATE_FORMAT(c_datesave, '%Y-%m-%d')DESC";

$result=mysqli_query($condb,$query)or die ('Error in query :$query'.mysql_error());
$resultchart=mysqli_query($condb,$query)or die ('Error in query :$query'.mysql_error());
// echo $query;

$datesave=array();
$total=array();
while ($rs=mysqli_fetch_array($resultchart) ){

	$datesave[]="\"".$rs['datesave']."\"";
	$total[]="\"".$rs['total']."\"";
	# code...
}
$datesave=implode(",",$datesave);
$total=implode(",", $total);

?>
<h3>ປະຫວັດການເຂົ້າເບິ່ງເວັບໄຊ</h3>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js">
	
</script>
<hr>

<canvas id="myChart" width="800px" height="300px"></canvas>
<script>
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [<?php echo $datesave;?>],
        datasets: [{
            label: '',
            data: [<?php echo $total;?>],
            backgroundColor: [
                'rgba(255, 99, 132, .2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
        	yAxes:[{
            ticks: {
                beginAtZero: true
            }
            }]
        }
    }
});
</script>
 
