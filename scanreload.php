<?php
require_once('dbconnect.php');

 $txtbarcode=$_POST['barcode'];
 $sql1 =("INSERT INTO calculation (id,barcode,product,height,width,thickness,volume,weight,price) SELECT * FROM barcode WHERE barcode = '".$txtbarcode."'");
//showing in table format
 $result1 = mysqli_query($conn, $sql1) or die( mysqli_error($conn));
 if ($result1){
   header ("Location: bbb.php");
  
   
}

?>