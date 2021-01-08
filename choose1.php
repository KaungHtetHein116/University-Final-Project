<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" />
<script src="js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="led/led.js"></script>
    <script src="led/led2.js"></script>
    <script src="led/led3.js"></script>
    <script src="led/led4.js"></script>
    <script src="led/led5.js"></script>
    <script src="led/led6.js"></script>
     <script src="led/led7.js"></script>
    <script src="led/led8.js"></script>
    <script src="led/led9.js"></script>
    <script src="led/led10.js"></script>
  


<html>
<head>
<style>
body {
   background-image : url("image/store.jpg");
   background-repeat:repeat;
	background-size: 100%;
}
.total{
   background-color : turquoise;
   width : 300px;
   text-align : center;
   margin: auto;
      border-radius: 8px;
      
   
}

.smallbag img{
  width: 120px;
    height: 170px; 
   
   }
.smallbag{ 
      color : black;
        background-color : #48D1CC;
}

.mediumbag img{
  width: 150px;
    height: 200px; 
   
   }
   .mediumbag{ 
   color : black;
        background-color : #48D1CC;
}
   
.largebag img{
  width: 180px;
    height: 230px; 
   
   }
.largebag{ 
   color : black;
        background-color : #48D1CC;
}

.xlargebag img{
  width: 210px;
    height: 260px; 
   
   }
   .xlargebag{ 
   color : black;
        background-color : #48D1CC;
}

.table1 table {
  border-collapse: collapse;
  width: 30%;
  color : black;
  background-color : silver;
}

.bag{
    display: inline-block;
  
}
.allbag{
    text-align : center;
}
th, td {
  text-align:left ;
  padding: 8px;
}

</style>


<?php
require_once('dbconnect.php');

 $sqlNo1= "SET @autoNo :=0";
 $resultNo1 = $conn ->query($sqlNo1);
 $sqlNo2= "UPDATE calculation SET Number=@autoNo := (@autoNo +1)";
 $resultNo2 = $conn ->query($sqlNo2);
 $sqlNo3="ALTER TABLE calculation AUTO_INCREMENT =1";
 $resultNo3 = $conn ->query($sqlNo3);
 

$sql="SELECT * from calculation";
$result = $conn->query($sql) or die(mysql_erfror());
echo "<div class='table1' >";
echo "<table class='table table-bordered table-hover ml-5 mt-5  '>";
echo "<thead class='thead-dark'>";
echo"<tr><th>Number</th><th>Product Name</th><th>Price(฿)</th></tr>";
echo "</thead>";
while($row = $result->fetch_assoc())
{
echo"<tr>";
echo "<td align=center>".$row['Number']."</td>";
echo "<td align=center>".$row['product']."</td>";
echo "<td align=center>".$row['price']."</td>";

echo"</tr>";

}

$sql4 = ("SELECT SUM(price) AS price_sum FROM  calculation ");
$result4 = mysqli_query($conn, $sql4) or die( mysqli_error($conn)); 
$row = mysqli_fetch_assoc($result4); 
$psum = $row['price_sum'];
echo"<tr>";
echo "<td>";
echo "<td align=center>Total Price";
echo  "<td align=center>$psum ";
echo"</tr>";
echo "</table>";
echo "</div>";
?>



<?php

// connect to database

$server = "localhost";
$user = "root";
$pass = "";
$dbname = "db1";

$conn = new mysqli($server, $user, $pass, $dbname);

if($conn->connect_error)
{
    die("Connection failed:" . $conn->connect_error);
}


//Start

$sh = 150; // max height for small bag
$mh = 180; // max height for small bag
$lh = 250; // max height for small bag
$xh = 400; // max height for small bag

$sv = 1312400; // max volume for small bag
$mv = 2699900; // max volume for small bag
$lv = 6750000; // max volume for small bag
$xv = 12959900; // max volume for small bag

$sw = 1900; // max weight capacity for small bag
$mw = 2900; // max weight capacity for medium bag
$lw = 4900; // max weight capacity for large bag
$xw = 5900; // max weight capacity for extra large bag

$sql5 = ("SELECT Count(Number) AS item FROM  calculation ");
$result5 = mysqli_query($conn, $sql5) or die( mysqli_error($conn)); 
$row = mysqli_fetch_assoc($result5); 
$totalitem = $row['item'];
echo "<div class='total'>";
echo "<h2 style='color:black'> Total Items : $totalitem</h3>";
echo "</div>";
echo "<br>";

// listing height desc from item list

$sql = mysqli_query( $conn,"SELECT MAX( height ) AS maxh FROM calculation;" );
$row = mysqli_fetch_array( $sql );
$MaxHeight = $row['maxh'];

//Start While loop for whole table
$counts = 0;
$countm = 0;
$countl = 0;
$countx = 0;
$countb=0;
$countdb=0;
$sql1="SELECT * FROM calculation";
$res=mysqli_query($conn,$sql1);
echo "<div class='allbag'>";
while($row=mysqli_fetch_assoc($res)){
    if ($row=mysqli_fetch_assoc($res) === FALSE){
        break;
    }
        else
        {

$sql3="SELECT * FROM calculation";
$res=mysqli_query($conn,$sql3);

$totv=0;
$count=0;

$sql = mysqli_query( $conn,"SELECT MAX( height ) AS maxh FROM calculation;" );
$row = mysqli_fetch_array( $sql );
$MaxHeight = $row['maxh'];

$sqlv = mysqli_query( $conn,"SELECT volume AS vol FROM calculation ORDER BY height DESC LIMIT 1;" );
$rowv = mysqli_fetch_array( $sqlv );
$volume = $rowv['vol'];
//echo "volume= $volume";

echo "<table class='bag ml-3'>";
echo "<tr>";
echo "<td>";

/////////////////////////////////////////////////////////////////////////////////////////////////////////////   
///////////////////////////////Small Bag////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////

if ($MaxHeight <= $sh && $volume <= $sv) {

$sql2="SELECT * FROM calculation ORDER BY height DESC";
$result=mysqli_query($conn,$sql2);

echo "<table border=1 class='smallbag'>";
echo "<tr>";
echo"<td>";

while($row=mysqli_fetch_assoc($result))
{
    if($totv+$row['volume'] > $sv)
{
    break;
}
else {

$count++;
$pron =$row['product'];
$number =$row['Number'];
$totv=$totv+$row['volume'];
$sql1 = mysqli_query($conn, "SELECT SUM(weight) AS totw FROM ( SELECT weight FROM calculation ORDER BY height DESC LIMIT $count ) AS sub");
$row = mysqli_fetch_assoc($sql1); 
$totw = $row['totw'];

//choose how many small bags are needed according to the sum weight of the items

}
echo "$count .";  
echo "Item name - ($number) $pron";
echo "<br>";
}
echo "</td>";
echo "</tr>";


if($count>1){
    echo "<td>"; 
    echo "Put $count items";
    echo "</td>";
    }
    
    else{
        echo "<td>"; 
        echo "Put $count item";
        echo "</td>";
        }
    

$sql4 = ("SELECT Count(Number) AS item FROM  calculation ");
$result4 = mysqli_query($conn, $sql4) or die( mysqli_error($conn)); 
$row = mysqli_fetch_assoc($result4); 
$totalitem = $row['item'];
$left=$totalitem-$count;
echo "<br>";



if($totalitem > 0){
if ($totw > $sw){
      $countdb++;
    echo "<tr>";
    echo "<td align=center>";
    echo "<h4> Choose double Small Bag </h4>";
    echo "<br><br>";
    echo '<img src="image/d_smallbag.jpg">';
    echo "<br><br>";
      
     echo "<form method='post'>";
    
       if($countdb==1){
    echo " <input id='ledonDS' type='button' value='LED ON' class='btn btn-primary'>";
   }
     elseif($countdb==2){
    echo " <input id='ledonDS2' type='button' value='LED ON' class='btn btn-primary'>";
   }
    elseif($countdb==3){
    echo " <input id='ledonDS3' type='button' value='LED ON' class='btn btn-primary'>";
   }
    elseif($countdb==4){
    echo " <input id='ledonDS4' type='button' value='LED ON' class='btn btn-primary'>";
   }
     elseif($countdb==5){
    echo " <input id='ledonDS5' type='button' value='LED ON' class='btn btn-primary'>";
   }
    elseif($countdb==6){
    echo " <input id='ledonDS6' type='button' value='LED ON' class='btn btn-primary'>";
   }
    elseif($countdb==7){
    echo " <input id='ledonDS7' type='button' value='LED ON' class='btn btn-primary'>";
   }
     elseif($countdb==8){
    echo " <input id='ledonDS8' type='button' value='LED ON' class='btn btn-primary'>";
   }
    elseif($countdb==9){
    echo " <input id='ledonDS9' type='button' value='LED ON' class='btn btn-primary'>";
   }
    elseif($countdb==10){
    echo " <input id='ledonDS10' type='button' value='LED ON' class='btn btn-primary'>";
   }

     echo "</form>";
     
    echo "</td>";
    echo "</tr>";

    $counts = 2 + $counts;
    $sql3 = "INSERT INTO smallbag (product,number,price) SELECT product,'$counts',SUM(price) FROM calculation ORDER BY height DESC LIMIT $count";
    if($conn->query($sql3) === TRUE) {
    $delete="DELETE FROM calculation ORDER BY height DESC limit $count";
    $resultd=mysqli_query($conn, $delete);
    }
}
else { 
 
    $countb++;
    echo "<tr>";
    echo "<td align=center>";
    echo "<h4>Choose Small Bag</h4>";
    echo "<br><br>";
    echo '<img src="image/smallbag.jpg">';
    echo "<br><br>";
    
     echo "<form method='post'>";
      if($countb==1){
    echo " <input id='ledonS' type='button' value='LED ON' class='btn btn-primary'>";
   }
     elseif($countb==2){
    echo " <input id='ledonS2' type='button' value='LED ON' class='btn btn-primary'>";
   }
    elseif($countb==3){
    echo " <input id='ledonS3' type='button' value='LED ON' class='btn btn-primary'>";
   }
    elseif($countb==4){
    echo " <input id='ledonS4' type='button' value='LED ON' class='btn btn-primary'>";
   }
     elseif($countb==5){
    echo " <input id='ledonS5' type='button' value='LED ON' class='btn btn-primary'>";
   }
    elseif($countb==6){
    echo " <input id='ledonS6' type='button' value='LED ON' class='btn btn-primary'>";
   }
   if($countb==7){
    echo " <input id='ledonS7' type='button' value='LED ON' class='btn btn-primary'>";
   }
     elseif($countb==8){
    echo " <input id='ledonS8' type='button' value='LED ON' class='btn btn-primary'>";
   }
    elseif($countb==9){
    echo " <input id='ledonS9' type='button' value='LED ON' class='btn btn-primary'>";
   }
    elseif($countb==10){
    echo " <input id='ledonS10' type='button' value='LED ON' class='btn btn-primary'>";
   }
     echo "</form>";
    

    echo "</td>";
    echo "</tr>";
    
    $counts++;
    $sql3 = "INSERT INTO smallbag (product,number,price) SELECT product,'$counts',SUM(price) FROM calculation ORDER BY height DESC LIMIT $count";
    if($conn->query($sql3) === TRUE) {
    $delete="DELETE FROM calculation ORDER BY height DESC limit $count";
    $resultd=mysqli_query($conn, $delete);
}
}

}
echo "<tr>";
echo "<td>";
echo " Total Items left: $left ";
echo "</td>";
echo "</tr>";

echo "</table>";
//echo "<br>";


}



/////////////////////////////////////////////////////////////////////////////////////////////////////////////   
///////////////////////////////Medium Bag///////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
elseif ($MaxHeight <= $mh && $volume <=$mv ) {

    $sql2="SELECT * FROM calculation ORDER BY height DESC";
    $result=mysqli_query($conn,$sql2);

    echo "<table border=1 class='mediumbag'>";
    echo "<tr>";
    echo"<td>";

    while($row=mysqli_fetch_assoc($result))
    {
        if($totv+$row['volume'] > $mv)
    {
        break;
    }
    else {
    
    $count++;
    $pron =$row['product'];
    $number =$row['Number'];
    $totv=$totv+$row['volume'];
    $sql1 = mysqli_query($conn, "SELECT SUM(weight) AS totw FROM ( SELECT weight FROM calculation ORDER BY height DESC LIMIT $count ) AS sub");
    $row = mysqli_fetch_assoc($sql1); 
    $totw = $row['totw'];
    
    //choose how many medium bags are needed according to the sum weight of the items
    
    }
    echo "$count ."; 
    echo "Item name -($number) $pron";
    echo "<br>";
    }
    echo "</td>";
    echo "</tr>";
    
    if($count>1){
    echo "<td>"; 
    echo "Put $count items";
    echo "</td>";
    }
    
    else{
        echo "<td>"; 
        echo "Put $count item";
        echo "</td>";
        }
    
    $sql4 = ("SELECT Count(Number) AS item FROM  calculation ");
    $result4 = mysqli_query($conn, $sql4) or die( mysqli_error($conn)); 
    $row = mysqli_fetch_assoc($result4); 
    $totalitem = $row['item'];
    $left=$totalitem-$count;
    echo "<br>";
  

    if($totalitem > 0){
    if ($totw > $mw){
        $countdb++;
        echo "<tr>";
        echo "<td align=center>";
        echo "<h4>Cchoose double Medium Bag </h4>";
        echo "<br><br>";
        echo '<img src="image/d_mediumbag.jpg">';
        echo "<br><br>";
      
     echo "<form method='post'>";

    
       if($countdb==1){
    echo " <input id='ledonDM' type='button' value='LED ON' class='btn btn-success'>";
   }
     elseif($countdb==2){
    echo " <input id='ledonDM2' type='button' value='LED ON' class='btn btn-success'>";
   }
    elseif($countdb==3){
    echo " <input id='ledonDM3' type='button' value='LED ON' class='btn btn-success'>";
   }
    elseif($countdb==4){
    echo " <input id='ledonDM4' type='button' value='LED ON' class='btn btn-success'>";
   }
     elseif($countdb==5){
    echo " <input id='ledonDM5' type='button' value='LED ON' class='btn btn-success'>";
   }
    elseif($countdb==6){
    echo " <input id='ledonDM6' type='button' value='LED ON' class='btn btn-success'>";
   }
   elseif($countdb==7){
    echo " <input id='ledonDM7' type='button' value='LED ON' class='btn btn-success'>";
   }
     elseif($countdb==8){
    echo " <input id='ledonDM8' type='button' value='LED ON' class='btn btn-success'>";
   }
    elseif($countdb==9){
    echo " <input id='ledonDM9' type='button' value='LED ON' class='btn btn-success'>";
   }
    elseif($countdb==10){
    echo " <input id='ledonDM10' type='button' value='LED ON' class='btn btn-success'>";
   }
    
     echo "</form>";
     
        echo "</td>";
        echo "</tr>";

        $counts = 2 + $counts;
        $sql3 = "INSERT INTO mediumbag (product,number,price) SELECT product,'$counts',SUM(price) FROM calculation ORDER BY height DESC LIMIT $count";
        if($conn->query($sql3) === TRUE) {
        $delete="DELETE FROM calculation ORDER BY height DESC limit $count";
        $resultd=mysqli_query($conn, $delete);
        }
    }
    else {
    
        $countb++;
        echo "<tr>";
        echo "<td align=center>";
        echo "<h4> Choose Medium Bag </h4>";
        echo "<br><br>";
        echo '<img src="image/mediumbag.jpg">';
        echo "<br><br>";
      
     echo "<form method='post'>";
 
    
       if($countb==1){
    echo " <input id='ledonM' type='button' value='LED ON' class='btn btn-success'>";
   }
     elseif($countb==2){
    echo " <input id='ledonM2' type='button' value='LED ON' class='btn btn-success'>";
   }
    elseif($countb==3){
    echo " <input id='ledonM3' type='button' value='LED ON' class='btn btn-success'>";
   }
    elseif($countb==4){
    echo " <input id='ledonM4' type='button' value='LED ON' class='btn btn-success'>";
   }
     elseif($countb==5){
    echo " <input id='ledonM5' type='button' value='LED ON' class='btn btn-success'>";
   }
    elseif($countb==6){
    echo " <input id='ledonM6' type='button' value='LED ON' class='btn btn-success'>";
   }
    elseif($countb==7){
    echo " <input id='ledonM7' type='button' value='LED ON' class='btn btn-success'>";
   }
     elseif($countb==8){
    echo " <input id='ledonM8' type='button' value='LED ON' class='btn btn-success'>";
   }
    elseif($countb==9){
    echo " <input id='ledonM9' type='button' value='LED ON' class='btn btn-success'>";
   }
    elseif($countb==10){
    echo " <input id='ledonM10' type='button' value='LED ON' class='btn btn-success'>";
   }

     echo "</form>";
     
        echo "</td>";
        echo "</tr>";

        $counts++;
        $sql3 = "INSERT INTO mediumbag (product,number,price) SELECT product,'$counts',SUM(price) FROM calculation ORDER BY height DESC LIMIT $count";
        if($conn->query($sql3) === TRUE) {
        $delete="DELETE FROM calculation ORDER BY height DESC limit $count";
        $resultd=mysqli_query($conn, $delete);
    }
    }
    }
        echo "<tr>";
        echo "<td>";
        echo " Total Items left: $left ";
        echo "</td>";
        echo "</tr>";

        echo "</table>";
       // echo "<br>";

    }
    

    
/////////////////////////////////////////////////////////////////////////////////////////////////////////////   
///////////////////////////////Large Bag/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
   
elseif ($MaxHeight <= $lh  && $volume <= $lv) {

    $sql2="SELECT * FROM calculation ORDER BY height DESC";
    $result=mysqli_query($conn,$sql2);

    echo "<table border=1 class='largebag'>";
    echo "<tr>";
    echo"<td>";

    while($row=mysqli_fetch_assoc($result))
    {
        if($totv+$row['volume'] > $lv)
    {
        break;
    }
    else {
    
    $count++;
    $pron =$row['product'];
    $number =$row['Number'];
    $totv=$totv+$row['volume'];
    $sql1 = mysqli_query($conn, "SELECT SUM(weight) AS totw FROM ( SELECT weight FROM calculation ORDER BY height DESC LIMIT $count ) AS sub");
    $row = mysqli_fetch_assoc($sql1); 
    $totw = $row['totw'];
    
    //choose how many large bags are needed according to the sum weight of the items
    
    }

    echo "$count ."; 
    echo "Item name -($number) $pron";
  
    echo "<br>";
    }
    echo "</td>";
    echo "</tr>";


    if($count>1){
        echo "<td>"; 
        echo "Put $count items";
        echo "</td>";
        }
        
        else{
            echo "<td>"; 
            echo "Put $count item";
            echo "</td>";
            }
        
    $sql4 = ("SELECT Count(Number) AS item FROM  calculation ");
    $result4 = mysqli_query($conn, $sql4) or die( mysqli_error($conn)); 
    $row = mysqli_fetch_assoc($result4); 
    $totalitem = $row['item'];
    $left=$totalitem-$count;
    echo "<br>";
    
    
    if($totalitem > 0){
    if ($totw > $lw){
         $countdb++;
        echo "<tr>";
        echo "<td align=center>";
        echo "<h4> Choose double Large Bag </h4>";
        echo "<br><br>";
        echo '<img src="image/d_largebag.jpg">';
        echo "<br><br>";
      
     echo "<form method='post'>";
   
    
       if($countdb==1){
    echo " <input id='ledonDL' type='button' value='LED ON' class='btn btn-danger'>";
   }
     elseif($countdb==2){
    echo " <input id='ledonDL2' type='button' value='LED ON' class='btn btn-danger'>";
   }
    elseif($countdb==3){
    echo " <input id='ledonDL3' type='button' value='LED ON' class='btn btn-danger'>";
   }
    elseif($countdb==4){
    echo " <input id='ledonDL4' type='button' value='LED ON' class='btn btn-danger'>";
   }
     elseif($countdb==5){
    echo " <input id='ledonDL5' type='button' value='LED ON' class='btn btn-danger'>";
   }
    elseif($countdb==6){
    echo " <input id='ledonDL6' type='button' value='LED ON' class='btn btn-danger'>";
   }
   elseif($countdb==7){
    echo " <input id='ledonDL7' type='button' value='LED ON' class='btn btn-danger'>";
   }
     elseif($countdb==8){
    echo " <input id='ledonDL8' type='button' value='LED ON' class='btn btn-danger'>";
   }
    elseif($countdb==9){
    echo " <input id='ledonDL9' type='button' value='LED ON' class='btn btn-danger'>";
   }
    elseif($countdb==10){
    echo " <input id='ledonDL10' type='button' value='LED ON' class='btn btn-danger'>";
   }
     echo "</form>";
     
        echo "</td>";
        echo "</tr>";
        $countl = 2 + $countl;
        $sql3 = "INSERT INTO largebag (product,number,price) SELECT product,'$countl',SUM(price) FROM calculation ORDER BY height DESC LIMIT $count";
        if($conn->query($sql3) === TRUE) {
        $delete="DELETE FROM calculation ORDER BY height DESC limit $count";
        $resultd=mysqli_query($conn, $delete);
        }
    }
    else {
    
        $countb++;
        echo "<tr>";
        echo "<td align=center>";
        echo "<h4> Choose Large Bag </h4>";
        echo "<br><br>";
        echo '<img src="image/largebag.jpg">';
        echo "<br><br>";
      
     echo "<form method='post'>";
   
    
      if($countb==1){
    echo " <input id='ledonL' type='button' value='LED ON' class='btn btn-danger'>";
   }
     elseif($countb==2){
    echo " <input id='ledonL2' type='button' value='LED ON' class='btn btn-danger'>";
   }
    elseif($countb==3){
    echo " <input id='ledonL3' type='button' value='LED ON' class='btn btn-danger'>";
   }
    elseif($countb==4){
    echo " <input id='ledonL4' type='button' value='LED ON' class='btn btn-danger'>";
   }
     elseif($countb==5){
    echo " <input id='ledonL5' type='button' value='LED ON' class='btn btn-danger'>";
   }
    elseif($countb==6){
    echo " <input id='ledonL6' type='button' value='LED ON' class='btn btn-danger'>";
   }
   elseif($countb==7){
    echo " <input id='ledonL7' type='button' value='LED ON' class='btn btn-danger'>";
   }
     elseif($countb==8){
    echo " <input id='ledonL8' type='button' value='LED ON' class='btn btn-danger'>";
   }
    elseif($countb==9){
    echo " <input id='ledonL9' type='button' value='LED ON' class='btn btn-danger'>";
   }
    elseif($countb==10){
    echo " <input id='ledonL10' type='button' value='LED ON' class='btn btn-danger'>";
   }
   
     echo "</form>";
     
        echo "</td>";
        echo "</tr>";

        $countl++;
        $sql3 = "INSERT INTO largebag (product,number,price) SELECT product,'$countl',SUM(price) FROM calculation ORDER BY height DESC LIMIT $count";
        if($conn->query($sql3) === TRUE) {
        $delete="DELETE FROM calculation ORDER BY height DESC limit $count";
        $resultd=mysqli_query($conn, $delete);
    }
    }
    }
  
    echo "<tr>";
    echo "<td>";
    echo " Total Items left: $left ";
    echo "</td>";
    echo "</tr>";

    echo "</table>";
    //echo "<br>";
    
    }


/////////////////////////////////////////////////////////////////////////////////////////////////////////////   
///////////////////////////////Extra Large Bag///////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////

else {

    $sql2="SELECT * FROM calculation ORDER BY height DESC";
    $result=mysqli_query($conn,$sql2);

    echo "<table border=1 class='xlargebag'>";
    echo "<tr>";
    echo"<td>";

    while($row=mysqli_fetch_assoc($result))
    {
        if($totv+$row['volume'] > $xv)
    {
        break;
    }
    else {
    
    $count++;
    $pron =$row['product'];
    $number =$row['Number'];
    $totv=$totv+$row['volume'];
    $sql1 = mysqli_query($conn, "SELECT SUM(weight) AS totw FROM ( SELECT weight FROM calculation ORDER BY height DESC LIMIT $count ) AS sub");
    $row = mysqli_fetch_assoc($sql1); 
    $totw = $row['totw'];
    
    //choose how many extralarge bags are needed according to the sum weight of the items
    
    }
    echo " $count. "; 
    echo "Item name - ($number) $pron";
   
    echo "<br>";
    }
    echo "</td>";
    echo "</tr>";


    if($count>1){
        echo "<td>"; 
        echo "Put $count items";
        echo "</td>";
        }
        
        else{
            echo "<td>"; 
            echo "Put $count item";
            echo "</td>";
            }
    $sql4 = ("SELECT Count(Number) AS item FROM  calculation ");
    $result4 = mysqli_query($conn, $sql4) or die( mysqli_error($conn)); 
    $row = mysqli_fetch_assoc($result4); 
    $totalitem = $row['item'];
    $left=$totalitem-$count;
    echo "<br>";
   
    
    if($totalitem > 0){
    if ($totw > $xw){
    
    $countdb++;

        echo "<tr>";
        echo "<td align=center>";
        echo "<h4> Choose double XLarge Bag </h4>";
        echo "<br><br>";
        echo '<img src="image/d_xlargebag.jpg">';
        echo "<br><br>";
      
     echo "<form method='post'>";
    
    if($countdb==1){
    echo " <input id='ledonDX' type='button' value='LED ON' class='btn btn-warning'>";
   }
     elseif($countdb==2){
    echo " <input id='ledonDX2' type='button' value='LED ON' class='btn btn-warning'>";
   }
    elseif($countdb==3){
    echo " <input id='ledonDX3' type='button' value='LED ON' class='btn btn-warning'>";
   }
    elseif($countdb==4){
    echo " <input id='ledonDX4' type='button' value='LED ON' class='btn btn-warning'>";
   }
     elseif($countdb==5){
    echo " <input id='ledonDX5' type='button' value='LED ON' class='btn btn-warning'>";
   }
    elseif($countdb==6){
    echo " <input id='ledonDX6' type='button' value='LED ON' class='btn btn-warning'>";
   }
   elseif($countdb==7){
    echo " <input id='ledonDX7' type='button' value='LED ON' class='btn btn-warning'>";
   }
     elseif($countdb==8){
    echo " <input id='ledonDX8' type='button' value='LED ON' class='btn btn-warning'>";
   }
    elseif($countdb==9){
    echo " <input id='ledonDX10' type='button' value='LED ON' class='btn btn-warning'>";
   }
    elseif($countdb==10){
    echo " <input id='ledonDX10' type='button' value='LED ON' class='btn btn-warning'>";
   }
   
     echo "</form>";
     
        echo "</td>";
        echo "</tr>";

        $countx = 2 + $countx;
        $sql3 = "INSERT INTO extralargebag (product,number,price) SELECT product,'$countx',SUM(price) FROM calculation ORDER BY height DESC LIMIT $count";
        if($conn->query($sql3) === TRUE) {
        $delete="DELETE FROM calculation ORDER BY height DESC limit $count";
        $resultd=mysqli_query($conn, $delete);
        }
    }
    else {
     $countb++;

        echo "<tr>";
        echo "<td align=center>";
        echo "<h4> Choose XLarge Bag </h4>";
        echo "<br><br>";
        echo '<img src="image/xlargebag.jpg">';
        echo "<br><br>";
      
     echo "<form method='post'>";

    
    if($countb==1){
    echo " <input id='ledonX' type='button' value='LED ON' class='btn btn-warning'>";
   }
     elseif($countb==2){
    echo " <input id='ledonX2' type='button' value='LED ON' class='btn btn-warning'>";
   }
    elseif($countb==3){
    echo " <input id='ledonX3' type='button' value='LED ON' class='btn btn-warning'>";
   }
    elseif($countb==4){
    echo " <input id='ledonX4' type='button' value='LED ON' class='btn btn-warning'>";
   }
     elseif($countb==5){
    echo " <input id='ledonX5' type='button' value='LED ON' class='btn btn-warning'>";
   }
    elseif($countb==6){
    echo " <input id='ledonX6' type='button' value='LED ON' class='btn btn-warning'>";
   }
    elseif($countb==7){
    echo " <input id='ledonX7' type='button' value='LED ON' class='btn btn-warning'>";
   }
     elseif($countb==8){
    echo " <input id='ledonX8' type='button' value='LED ON' class='btn btn-warning'>";
   }
    elseif($countb==9){
    echo " <input id='ledonX9' type='button' value='LED ON' class='btn btn-warning'>";
   }
    elseif($countb==10){
    echo " <input id='ledonX10' type='button' value='LED ON' class='btn btn-warning'>";
   }
   
     echo "</form>";
        echo "</td>";
        echo "</tr>";

        $countx++;
        $sql3 = "INSERT INTO extralargebag (product,number,price) SELECT product,'$countx',SUM(price) FROM calculation ORDER BY height DESC LIMIT $count";
        if($conn->query($sql3) === TRUE) {
        $delete="DELETE FROM calculation ORDER BY height DESC limit $count";
        $resultd=mysqli_query($conn, $delete);
    }
    }
    }
    echo "<tr>";
    echo "<td>";
    echo " Total Items left: $left ";
    echo "</td>";
    echo "</tr>";

    echo "</table>";
    //echo "<br>";
    
    
    }
     echo"</td>";                   
   
    echo "</tr>";
    echo "</table>";

}
}
echo "</div>";
?>
<?php

$sql6 = "INSERT INTO dashboard (date,smallbag, mediumbag,largebag,extralargebag,price)
values( 
    CURRENT_DATE, 
    (select number from smallbag order by number desc limit 1) , 
    (select number from mediumbag order by number desc limit 1), 
    (select number from largebag order by number desc limit 1), 
    (select number from extralargebag order by number desc limit 1),
    ('$psum') 
    )";

if($conn->query($sql6) === TRUE) {
   // echo"success fully added to dashboard<br>";
}

else{echo"no data";}


?>
<div class="logout">

   
<a href=customer.php class=' ml-5 mb-5 btn btn-success btn-lg'>FINISHED</a>

</div>

</body>
</html>
</head>
