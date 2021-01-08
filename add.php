<?php
include('dbconnect.php');

$txtbarcode=$_POST['barcode'];
$txtproduct=$_POST['product'];
$txtheight=$_POST['height'];
$txtwidth=$_POST['width'];
$txtthickness=$_POST['thickness'];
$txtvolume=$_POST['volume'];
$txtweight=$_POST['weight'];
$txtprice=$_POST['price'];
$sql="INSERT INTO barcode (barcode,product,height,width,thickness,volume,weight,price) VALUES ('$txtbarcode','$txtproduct','$txtheight','$txtwidth','$txtthickness','$txtvolume','$txtweight','$txtprice')";

/*if(!mysql_query($sql,$con))
{
die('Error:'.mysql_error());
}
echo "<script> alert('1 record added!');
window.location.href='index.php';</script>";
mysql_close($con); */

if($conn->query($sql) === TRUE){
    header("Refresh:0; url=index.php");
   }
   
   //$conn->query($sql)
  
?>
