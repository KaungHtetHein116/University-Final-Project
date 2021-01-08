<html>
<link href="css/bootstrap.min.css" rel="stylesheet" />
<script src="js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   
<style>
body {
   background-image : url("image/barcodescanner.png");
  background-repeat: no-repeat;
	background-size: 100%;
}
input[type=text] {
  width: 100%;
  box-sizing: border-box;
  border: 3px solid #ccc;
  border-radius: 10px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
}
.center{
  margin: auto;
  width: 40%;
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
a:link, a:visited {
position: fixed;
right: 20px;
top: 17px;
}
</style>
<?php
require_once('dbconnect.php');


$truncatetable= ("TRUNCATE TABLE calculation");
$result1 = mysqli_query($conn, $truncatetable);

$truncatetable1= ("TRUNCATE TABLE smallbag");
$result2 = mysqli_query($conn, $truncatetable1);

$truncatetable2= ("TRUNCATE TABLE mediumbag");
$result3 = mysqli_query($conn, $truncatetable2);

$truncatetable3= ("TRUNCATE TABLE largebag");
$result4 = mysqli_query($conn, $truncatetable3);

$truncatetable4= ("TRUNCATE TABLE extralargebag");
$result5 = mysqli_query($conn, $truncatetable4);

?>
<body class = "alert-info">

<div class="first">
<h3 style="color:hotpink" >Welcome from 'Bag Size Choosing System'</h3>
<div class="logout">
<a href = "start.php" class="btn mt-3 btn-warning">LOGOUT</a>
</div>
</div>

<div class="center" style="margin-top:2%;" >
<form action=bbb.php method=POST>
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
</body>
</html>