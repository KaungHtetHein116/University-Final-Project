<html>
<head>
   <link rel="stylesheet" a href="style/search.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script type="text/javascript" src="delete.js"></script>
  <script type="text/javascript" src="assets/bootstrap/js/bootbox.min.js"></script>
  <style>
table {
  
  width: 70%;
  border:2px solid #aaa; 
  border-radius: 10px;
 
}
th, td {
  text-align: center;
  padding: 8px;
}


  </style>
   </head>
<body>

<h1 align="center" style="color:blueviolet"> Search For Information</h1>
<div class="back">
<a href=index.php class=' ml-5 btn btn-dark'>Back To Database</a>
</div>
<div class="logout">
<a href=start.php class=' mr-5 btn btn-warning'>LOGOUT</a>
</div>
<form action=aaa.php method=POST>
<div class="search">
<h4>ENTER BARCODE
<input type="text" name="barcode" />

 </div>

</form>
<hr/>
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

//require_once('dbconnect.php');
$txtbarcode=$_POST['barcode'];

$sql="SELECT * from barcode where barcode='".$txtbarcode."'";
$result = mysqli_query($conn, $sql) or die( mysqli_error($conn));
echo "<center><table class='ml-3 mt-5 table-hover table-striped table-bordered  table-primary'>";
echo"<tr><th>ID</th><th>Barcode</th><th>Product</th><th>Height</th><th>Width</th><th>Thickness</th><th>Volume</th><th>Weight</th><th>Price</th><th>Action</th></tr>";
//while($row=mysql_fetch_array($result))
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result))
{
echo"<tr>";
echo "<td align= center>".$row['id']."</td>";
echo "<td align= center>".$row['barcode']."</td>";
echo "<td align=center>".$row['product']."</td>";
echo "<td align= center>".$row['height']."</td>";
echo "<td align= center>".$row['width']."</td>";
echo "<td align= center>".$row['thickness']."</td>";
echo "<td align=center>".$row['volume']."</td>";
echo "<td align=center>".$row['weight']."</td>";
echo "<td align=center>".$row['price']."</td>";
echo"<td align=center>
<a class='delete_student btn btn-danger btn-sm' data-student-id=".$row['id']."  href='javascript:void(0)'>DELETE</a></td>";
echo"</tr>";
}
echo "</table>";
//mysql_close($con);
?>
</body>
</html>

