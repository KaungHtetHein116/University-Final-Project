<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "db1";

$conn = new mysqli($server, $user, $pass, $dbname);

if($conn->connect_error)
{
    die("Connection failed:" . $conn->connect_error);
}

?>

<html>
<head>
   <link rel="stylesheet" a href="style/dashboard.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
<style>
th, td {
  text-align: center;
  padding: 10px;
}


</style>
   </head>

<body>
<h1 align="center" style="color:blueviolet">DASHBOARD</h1>
<div class="back">
<a href=index.php class=' ml-5 btn btn-dark'>Back To Database</a>
</div>
<div class="logout">
<a href=start.php class=' mr-5 btn btn-warning'>LOGOUT</a>
</div>
<?php
//$sqlmon = "SELECT SUM(smallbag), SUM(mediumbag),SUM(largebag),SUM(extralargebag) FROM dashboard WHERE MONTH(date) = MONTH(CURDATE())";
//$resultmon = mysqli_query($conn, $sqlmon) or die( mysqli_error($conn));
echo "cc:";
?>
<div class="search">


<h4>CHOOSE DATE</h4>

<form action="cmonthdash.php" method="POST">

<input name="date" type="date"
value="<?php echo date('Y-m-d',strtotime($data["date"])) ?>"/>



<?php
$txtdate = $_POST['date'];
?>
<input type="submit">
</select>
</form>
</div>
<hr>

</body>
</html>

<?php
//IFNULL(ColumnName,0)
$sqlmon = "SELECT SUM(smallbag), SUM(mediumbag),SUM(largebag),SUM(extralargebag) FROM dashboard WHERE MONTH(date) = MONTH(CURDATE())";
$resultmon = mysqli_query($conn, $sqlmon) or die( mysqli_error($conn));
echo "cc:$resultmon";

$sql="SELECT date, Count(price) as cs, SUM(IFNULL(smallbag,0)) as ss, SUM(IFNULL(mediumbag,0)) as sm, SUM(IFNULL(largebag,0)) as sl, SUM(IFNULL(extralargebag,0)) as se, SUM(price) as sp from dashboard where date='".$txtdate."'";
$result = mysqli_query($conn, $sql) or die( mysqli_error($conn));
echo "<div class='dash'>";
echo "<center><table class='ml-3 mt-5 table-hover table-striped table-bordered  table-primary'>";
echo"<tr><th>Date</th><th>Customers</th><th>S bag</th><th>M bag</th><th>L bag</th><th>XL bag</th><th>Revenue</th></tr>";

$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result))
{
echo"<tr>";
echo "<td align= center>".$row['date']."</td>";
echo "<td align= center>".$row['cs']."</td>";
echo "<td align= center>".$row['ss']."</td>";
echo "<td align=center>".$row['sm']."</td>";
echo "<td align= center>".$row['sl']."</td>";
echo "<td align= center>".$row['se']."</td>";
echo "<td align= center>".$row['sp']."</td>";
echo"<td align=center>
</td>";
echo"</tr>";
}
echo "</table>";
echo "</div>";
?>


<?php


	require('db_config.php');

    $date = mysqli_query($mysqli,$sql);
	$date = mysqli_fetch_all($date,MYSQLI_ASSOC);
    $date = json_encode(array_column($date, 'ss'),JSON_NUMERIC_CHECK);
    
    /* Getting demo_viewer table data */
    //$sql="SELECT date, Count(price) as cs, SUM(IFNULL(smallbag,0)) as ss, SUM(IFNULL(mediumbag,0)) as sm, SUM(IFNULL(largebag,0)) as sl, SUM(IFNULL(extralargebag,0)) as se, SUM(price) as sp from dashboard ";
	//$sql = "SELECT SUM(numberofview) as count FROM demo_viewer";
	$ss = mysqli_query($mysqli,$sql);
	$ss = mysqli_fetch_all($ss,MYSQLI_ASSOC);
	$ss = json_encode(array_column($ss, 'ss'),JSON_NUMERIC_CHECK);


	/* Getting demo_click table data */
	//$sql = "SELECT SUM(numberofclick) as count FROM demo_click";
	$sm = mysqli_query($mysqli,$sql);
	$sm = mysqli_fetch_all($sm,MYSQLI_ASSOC);
    $sm = json_encode(array_column($sm, 'sm'),JSON_NUMERIC_CHECK);
    
    /* Getting demo_click table data */
	//$sql = "SELECT SUM(numberofclick) as count FROM demo_click";
	$sl = mysqli_query($mysqli,$sql);
	$sl = mysqli_fetch_all($sl,MYSQLI_ASSOC);
    $sl = json_encode(array_column($sl, 'sl'),JSON_NUMERIC_CHECK);
    
    /* Getting demo_click table data */
	//$sql = "SELECT SUM(numberofclick) as count FROM demo_click";
	$se = mysqli_query($mysqli,$sql);
	$se = mysqli_fetch_all($se,MYSQLI_ASSOC);
	$se = json_encode(array_column($se, 'se'),JSON_NUMERIC_CHECK);


?>


<!DOCTYPE html>
<html>
<head>
	<title>HighChart</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
	<script src="https://code.highcharts.com/highcharts.js"></script>
</head>
<body>


<script type="text/javascript">


$(function () { 


    var ss = <?php echo $ss; ?>;
    var sm = <?php echo $sm; ?>;
    var sl = <?php echo $sl; ?>;
    var se = <?php echo $se; ?>;
    var date = <?php echo $date; ?>;


    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Bag Size Usage Report'
        },
        xAxis: {
            categories: ['Bag Sizes']
        },
        yAxis: {
            title: {
                text: 'Number of Bags'
            }
        },
        series: [{
            name: 'Small',
            data: ss
        },
        {
            name: 'Medium',
            data: sm
        },
        {
            name: 'Large',
            data: sl
        },
          {
            name: 'XL',
            data: se
        }]
    });
});


</script>


<div class="container">
	<br/>
	<h2 class="text-center"></h2>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <div id="container"></div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
