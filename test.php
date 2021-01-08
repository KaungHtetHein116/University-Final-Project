<html>
<body>
<form name="frm" method="POST" action="update.php">
<table>
<table border=1 align=center>
<tr>
<td>
<table>
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

require_once('dbconnect.php');
if (isset($GET['id'])){
$sql = 'SELECT id FROM barcode';
$result = mysqli_query($conn,$sql);
$barcode = $row['id'];
while($row=mysqli_fetch_array($result))
{

?>
last name:
<input type="text" name="barcode" value="<?php if (isset($result)) echo $result ?>">
<?php 
}
}
?>
</table>
</form>
</html>
</body>