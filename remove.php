<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" />
<script src="js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   


<html>
<head>
<style>

table {
  border-collapse: collapse;
  width: 60%;
}



</style>
<body class = "alert-success">
<div class="center" >
<table>
<a href=bbb.php class='ml-5 mt-3 btn btn-primary'>PREVIOUS</a>
<a href=choose3.php class='ml-5 mt-3 btn btn-primary'>Calculate</a>
<?php
require_once('dbconnect.php');

$sql="SELECT * from customer";
$result = $conn->query($sql) or die(mysql_erfror());
echo "<center><table border=1 class='mx-auto table-striped'>";
echo"<tr><th>Number</th><th>Barcode Number</th><th>Product Name</th><th>Price</th><th>ACTION</th></tr>";
while($row = $result->fetch_assoc())
{
echo"<tr>";
echo "<td align=center>".$row['Number']."</td>";
echo "<td align=center>".$row['barcode']."</td>";
echo "<td align=center>".$row['product']."</td>";
echo "<td align=center>".$row['price']."</td>";
echo"<td><a href=remove1.php?Number=".$row['Number']." class='ml-2 btn-danger'>DELETE</a></td>";
echo"</tr>";
}

?>
<br>
</table>
<br><br>
</div>
<table id="second">
<?php
$sql2 = ("SELECT SUM(volume) AS volume_sum FROM  customer ");
$result2 = mysqli_query($conn, $sql2) or die( mysqli_error($conn)); 
$row = mysqli_fetch_assoc($result2); 
$vsum = $row['volume_sum'];
$sql3 = ("SELECT SUM(weight) AS weight_sum FROM  customer");
$result3 = mysqli_query($conn, $sql3) or die( mysqli_error($conn)); 
$row = mysqli_fetch_assoc($result3); 
$wsum = $row['weight_sum'];
$sql4 = ("SELECT SUM(price) AS price_sum FROM  customer ");
$result4 = mysqli_query($conn, $sql4) or die( mysqli_error($conn)); 
$row = mysqli_fetch_assoc($result4); 
$psum = $row['price_sum'];
$sql5 = ("SELECT Count(id) AS item FROM  customer ");
$result5 = mysqli_query($conn, $sql5) or die( mysqli_error($conn)); 
$row = mysqli_fetch_assoc($result5); 
$count = $row['item'];

/*echo "<table border=1 align=center>";
echo"<tr><th>Total Items</th><th>Total Volume</th><th>Total Weight</th><th>Total Price</th></tr>";
echo"<tr><th>$count</th><th>$vsum</th><th>$wsum</th><th>$psum</th></tr>";

echo "</table>";
*/
?>
</table>
<br>
</body>
</html>
</head>
