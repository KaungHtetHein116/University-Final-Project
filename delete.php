<html>
<body bgcolor=black>
<?php

require_once('dbconnect.php');
//$id = $_REQUEST['id'];
if($_REQUEST['delete']){
//$pid =$_REQUEST['delete']; 
//$sql=("DELETE FROM barcode where id='".$_GET['del_id']."'");
$sql=("DELETE FROM barcode where id='".$_REQUEST['delete']."'");
//$conn->query($sql) 
$query = mysqli_query($conn, $sql) or die($sql);

  if($query) 
 {
  echo "Record Deleted Successfully!";
  
  
 }
   

/*if($conn->query($sql) === TRUE){
    header("Refresh:0; url=index.php");
   }*/
}
?>
</body>
</html>

