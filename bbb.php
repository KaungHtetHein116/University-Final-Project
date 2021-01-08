<html>
<link href="css/bootstrap.min.css" rel="stylesheet" />
<script src="js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
   
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="deletecustomer.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootbox.min.js"></script>
   
<style>
body {
   background-image : url("image/barcodescanner.png");
  background-repeat:repeat;
	background-size: 100%;
}
input[type=text] {
  width: 100%;
  box-sizing: border-box;
  border: 3px solid #ccc;
  border-radius: 10px;
  font-size: 16px;
  background-color: white;
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
}
.center{
  margin : auto;
  width: 40%;
  max-height:260px;
  padding: 25px;
  background-color: #EBFAFF;
  border: 2px solid blue;
  border-radius: 8px;
}
.first{
  margin: auto;
  width: 100%;
  padding: 20px;
  background-color: black;
}
.logout{
  float : right;
  margin-top :-50px;
}
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}



.table2 table {
  border-collapse: collapse;
  width:50%;
  
}

.press {
 color : white;
}

.total{
   background-color : turquoise;
   width : 300px;
   text-align : center;
   float : right;
   margin-right : 15px;
   margin-top :-150px;
   border-radius: 8px;
   
}
.tp{
   background-color : turquoise;
   width : 300px;
   text-align : center;
   float : right;
   margin-right : 15px;
   margin-top :-70px;
   border-radius: 8px;
   
}
</style>

<body class = "alert-info">

<div class="first">
<h3 style="color:hotpink" >Welcome from 'Bag Size Choosing System'</h3>
<div class="logout">
<a href = "customer.php" class="btn mt-3 btn-warning">LOGOUT</a>

</div>
</div>

<div class="center" style="margin-top:2%;" >
<form action=scanreload.php method=POST>
<table align=center>
<center><label><font size="8">Bag size chooser</label><br>
<label><font size="3">Scan Product's Barcode ID:</label>
<h1>
		<span class = "glyphicon glyphicon-barcode">
		</span>
</h1>
</center>
<tr><td></td><td><input type="text" name="barcode" class = "form-control" autofocus required/></td>
</tr>

</table>

</form>
</div>




<?php
/*$server = "localhost";
$user = "root";
$pass = "";
$dbname = "db1";

$conn = new mysqli($server, $user, $pass, $dbname);

if($conn->connect_error)
{
    die("Connection failed:" . $conn->connect_error);
}*/

require_once('dbconnect.php');

//start

//taking and transferring data
//if(isset($_POST['barcode'])){
/*$txtbarcode=$_POST['barcode'];
$sql1 =("INSERT INTO calculation (id,barcode,product,height,width,thickness,volume,weight,price) SELECT * FROM barcode WHERE barcode = '".$txtbarcode."'");
//showing in table format
$result1 = mysqli_query($conn, $sql1) or die( mysqli_error($conn));*/


$sql5 = ("SELECT Count(Number) AS item FROM  calculation ");
$result5 = mysqli_query($conn, $sql5) or die( mysqli_error($conn)); 
$row = mysqli_fetch_assoc($result5); 
$totalitem = $row['item'];
echo "<div class='total'>";
echo "<h2 style='color:black'> Total Items : $totalitem</h3>";
echo "</div>";

$sqlp = ("SELECT Sum(price) AS tprice FROM  calculation ");
$resultp = mysqli_query($conn, $sqlp) or die( mysqli_error($conn)); 
$rowp = mysqli_fetch_assoc($resultp); 
$totalprice = $rowp['tprice'];
echo "<div class='tp'>";
echo "<h2 style='color:black'> Total Price : $totalprice  ฿</h3>";
echo "</div>";


 $sqlNo1= "SET @autoNo :=0";
 $resultNo1 = $conn ->query($sqlNo1);
 $sqlNo2= "UPDATE calculation SET Number=@autoNo := (@autoNo +1)";
 $resultNo2 = $conn ->query($sqlNo2);
 $sqlNo3="ALTER TABLE calculation AUTO_INCREMENT =1";
 $resultNo3 = $conn ->query($sqlNo3);
 
$sql="SELECT * from calculation";
$result = mysqli_query($conn, $sql) or die( mysqli_error($conn));
echo "<div class= 'table2'>";
echo "<center><table class='table table-hover table-light table-bordered mt-5'>";
echo "<thead class='thead-dark'>";
echo "<tr><th>Number</th><th>Barcode</th><th>Product</th><th>Price</th><th>Action</th></tr>";
echo"</thead>";
//$result = mysqli_query($conn, $sql, $sql1);

while($row = mysqli_fetch_array($result))
{
echo"<tr>";
echo "<td align= center>".$row['Number']."</td>";
//echo "<td align= center>".$row['id']."</td>";
echo "<td align= center>".$row['barcode']."</td>";
echo "<td align=center>".$row['product']."</td>";
//echo "<td align= center>".$row['height']."</td>";
//echo "<td align= center>".$row['width']."</td>";
//echo "<td align= center>".$row['thickness']."</td>";
//echo "<td align=center>".$row['volume']."</td>";
//echo "<td align=center>".$row['weight']."</td>";
echo "<td align=center>".$row['price']."</td>";
echo"<td align=center>
<a class='delete_student btn btn-danger btn-sm' data-student-id=".$row['Number']."  href='javascript:void(0)'>DELETE</a></td>";

echo"</tr>";
}

echo "</table>";
echo "</div>";

//}

?>

</body>
<center>
<tr><a href='choose.php?' class='press btn btn-lg btn-success mt-2'> CHECK OUT</a>
</tr>
</center>
</html>

