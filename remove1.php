<html>
<body bgcolor=black>
<?php

require_once('dbconnect.php');

   if($_REQUEST['delete']){
    
    $sql=("DELETE FROM calculation where Number='".$_REQUEST['delete']."'");
     //$sql2=("SELECT FROM calculation where product='".$_REQUEST['delete']."'");
   
    $query = mysqli_query($conn, $sql) or die($sql);
    //$query2 = mysqli_query($conn, $sql2) or die($sql2);
    
    if($query) 
     {
      echo "Removed Successfully!!!!";
      //echo "$query2";
      //header("Refresh:0; url:bbb.php");
      //header("Location:bbb.php");
     }
    
   }
?>
</body>
</html>




