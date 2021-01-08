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

echo "test";
?>

<html>
<head>
   <link rel="stylesheet" a href="style/dashboard.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
   </head>

<body>
<h1 align="center" style="color:blueviolet">DASHBOARD</h1>
<div class="back">
<a href=index.php class=' ml-5 btn btn-dark'>Back To Database</a>
</div>
<div class="logout">
<a href=start.php class=' mr-5 btn btn-warning'>LOGOUT</a>
</div>




<div class="search">

<h4>CHOOSE DATE</h4>

<form action="dashboard.php" method="POST">

<input name="date" type="date"
value="<?php echo date('Y-m-d',strtotime($data["date"])) ?>"/>

<input type="submit">
</select>
</form>
</div>
<hr>

</body>
</html>
