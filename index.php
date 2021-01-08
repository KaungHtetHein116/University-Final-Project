<?php
   session_start();
   if(isset($_SESSION['log']))
   {
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="assets/bootstrap/css/ilmudetil.css">
    <link rel="stylesheet" a href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
 <script type="text/javascript" src="assets/bootstrap/js/bootbox.min.js"></script>
 <script type="text/javascript" src="delete.js"></script>
 
  <style>
table {

  width: 90%;
  border:2px solid #aaa; 
    border-radius: 18px;
}

.page{
  margin-left:8px;
 }
  .new{
    margin-left:70px;
  }
  th, td {
  text-align:left ;
  padding: 10px;
}
.logout{
  
  margin-left: 680px;
}
.jsd{
  color:red;
  margin-left: 330px;
  
}
  </style>
   <script>
 /*function deleteme(delid)
 {
   
 if(confirm("Do you want Delete?")){
 window.location.href='delete.php?del_id=' +delid+'';
 return true;
 }
 } */

 </script>
   </head>



<body>
<h1 align="center" style="color:blueviolet">DATABASE</h1>

<button onclick="document.getElementById('id01').style.display='block'" class="new mt-3 btn btn-info">Create New Product</button>

<a href=search.php class='ml-4 mt-3 btn btn-primary'>SERCH</a>
<a href=dash.php class='ml-4 mt-3 btn btn-secondary'>DASHBOARD</a>

<a href=start.php class='logout mt-3 btn btn-warning'>LOGOUT</a>

<div id="id01" class="w3-modal">

<!DOCTYPE html>
<html>
<head> 
<link rel="stylesheet" a href="style/createstyle.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


</head>

<body>

<div class="container" style='width:500px;'>
<form action=add.php method=POST>



<div class="form_input">
<h5 style=color:yellow > BARCODE
<input type="text" name="barcode" class='ml-3'/></div>

<div class="form_input">
<h5 style=color:yellow> PRODUCT
<input type="text" name="product" class='ml-3'/></div>

<div class="form_input">
<h5 style=color:yellow> HEIGHT
<input type="text" name="height" class='ml-5' /></div>

<div class="form_input">
<h5 style=color:yellow> WIDTH
<input type="text" name="width" class='ml-5'/></div>

<div class="form_input">
<h5 style=color:yellow> THICKNESS
<input type="text" name="thickness"   /></div>

<div class="form_input">
<h5 style=color:yellow> VOLUME
<input type="text" name="volume" class='ml-4'/></div>

<div class="form_input">
<h5 style=color:yellow> WEIGHT
<input type="text" name="weight" class='ml-4'/></div>

<div class="form_input">
<h5 style=color:yellow> PRICE
<input type="text" name="price" class='ml-5'/></div>

<input type=submit value='SAVE' class='w3-button w3-green rounded ml-5' /> 
<input type=reset value='CLEAR' class='w3-button w3-red rounded ml-5'>

<button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-blue rounded ml-5">Cancel</button>


</form>
</div>
</body>
</html>

   </div>
<?php
require_once('dbconnect.php');

 $sqlid1= "SET @autoid :=0";
 $resultid1 = $conn ->query($sqlid1);
 $sqlid2= "UPDATE barcode SET id=@autoid := (@autoid +1)";
 $resultid2 = $conn ->query($sqlid2);
 $sqlid3="ALTER TABLE barcode AUTO_INCREMENT =1";
 $resultid3 = $conn ->query($sqlid3);

$sql="SELECT * from barcode";
$result = $conn->query($sql) or die(mysql_erfror());
/*$results_per_page=8;
$number_of_results= mysqli_num_rows($result);*/

/*echo "<table class='table ml-3 mt-5 table-hover table-striped table-bordered  table-primary'>";
echo"<tr><th>ID </th><th>Barcode</th><th>Product</th><th>Height</th><th>Width</th><th>Thickness</th><th>Volume</th><th>Weight</th><th>Price</th><th>ACTION</th></tr>";
while($row = $result->fetch_assoc())
{
echo"<tr>";
echo "<td align=center>".$row['id']."</td>";
echo "<td align=center>".$row['barcode']."</td>";
echo "<td align=center>".$row['product']."</td>";
echo "<td align=center>".$row['height']."</td>";
echo "<td align=center>".$row['width']."</td>";
echo "<td align=center>".$row['thickness']."</td>";
echo "<td align=center>".$row['volume']."</td>";
echo "<td align=center>".$row['weight']."</td>";
echo "<td align=center>".$row['price']."</td>";
echo"<td> <a href='test.php?id=".$row['id']." class='ml-2 btn btn-danger'>Update</a>
<a href=delete.php?id=".$row['id']." class='ml-2 btn btn-danger'>DELETE</a></td>";
echo"</tr>";
}
echo "</table>";*/

/*$number_of_pages=ceil($number_of_results/$results_per_page);

if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}

$this_page_first_result = ($page-1)*$results_per_page;*/




//$sql='SELECT * from barcode LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
//$result = mysqli_query($conn, $sql);
if (isset($_GET['page_no']) && $_GET['page_no']!="") {
  $page_no = $_GET['page_no'];
  } else {
      $page_no = 1;
      }
	
    $total_records_per_page = 8;
    $offset = ($page_no-1) * $total_records_per_page;
    $previous_page = $page_no - 1;
    $next_page = $page_no + 1;
    $adjacents = "2";
   
    $result_count = mysqli_query(
      $conn,
      "SELECT COUNT(*) As total_records FROM `barcode`"
      );
      $total_records = mysqli_fetch_array($result_count);
      $total_records = $total_records['total_records'];
      $total_no_of_pages = ceil($total_records / $total_records_per_page);
      $second_last = $total_no_of_pages - 1;

$result = mysqli_query(
  $conn,
  "SELECT * FROM `barcode` LIMIT $offset, $total_records_per_page"
  );


echo "<center><table class='mt-2 table-hover table-striped table-bordered table-primary'>";
echo"<tr><th>ID </th><th>Barcode</th><th>Product</th><th>Height</th><th>Width</th><th>Thickness</th><th>Volume</th><th>Weight</th><th>Price</th><th>ACTION</th></tr>";
while($row = $result->fetch_assoc())
{
echo"<tr>";
echo "<td align=center>".$row['id']."</td>";
echo "<td align=center>".$row['barcode']."</td>";
echo "<td align=center>".$row['product']."</td>";
echo "<td align=center>".$row['height']."</td>";
echo "<td align=center>".$row['width']."</td>";
echo "<td align=center>".$row['thickness']."</td>";
echo "<td align=center>".$row['volume']."</td>";
echo "<td align=center>".$row['weight']."</td>";
echo "<td align=center>".$row['price']."</td>";
echo"<td align=center>
<a class='delete_student btn btn-danger btn-sm' data-student-id=".$row['id']."  href='javascript:void(0)'>DELETE</a></td>";
echo"</tr>";

}

echo "</table>";


/*for ($page=1;$page<=$number_of_pages;$page++) {
  echo '<a href="index.php?page=' . $page . '" class="btn page btn-warning mt-2">' . $page . '</a> ';
}*/

//l_close($con);
?>
 
<div style="color:white;padding:15px;">
<h5>Page <?php echo $page_no." of ".$total_no_of_pages; ?></h5>
</div >

<ul class="pagination pagination-lg justify-content-center">

<?php
echo "<li><a class='page-link' href='?page_no=1'>&lsaquo;&lsaquo; First Page</a></li>";
?>
    
<li>
<a <?php 
echo "class='page-link' href='?page_no=$previous_page'";
?>> &lsaquo; Previous </a>
</li>

<?php
if ($total_no_of_pages <= 10){  	 
	for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
	if ($counter == $page_no) {
	echo "<li class='active page-link '><a>$counter</a></li>";	
	        }else{
        echo "<li><a class='page-link'  href='?page_no=$counter'>$counter</a></li>";
                }
        } 
      }

elseif ($total_no_of_pages > 10){
  if($page_no <= 4) {			
      for ($counter = 1; $counter < 8; $counter++){		 
	      if ($counter == $page_no) {
	            echo "<li class='active page-link '><a>$counter</a></li>";	
		   }else{
              echo "<li><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
            }
      }
echo "<li><a class='page-link'>...</a></li>";
echo "<li><a class='page-link'  href='?page_no=$second_last'>$second_last</a></li>";
echo "<li><a class='page-link'  href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
  }

  elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {		 
    echo "<li><a class='page-link'  href='?page_no=1'>1</a></li>";
    echo "<li><a class='page-link'  href='?page_no=2'>2</a></li>";
    echo "<li><a class='page-link' >...</a></li>";
    for (
         $counter = $page_no - $adjacents;
         $counter <= $page_no + $adjacents;
         $counter++
         ) {		
         if ($counter == $page_no) {
      echo "<li class='active page-link '><a>$counter</a></li>";	
      }else{
            echo "<li><a class='page-link'  href='?page_no=$counter'>$counter</a></li>";
              }                  
           }
    echo "<li><a class='page-link'>...</a></li>";
    echo "<li><a class='page-link' href='?page_no=$second_last'>$second_last</a></li>";
    echo "<li><a class='page-link'  href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
  }
  else {
    echo "<li><a class='page-link' href='?page_no=1'>1</a></li>";
    echo "<li><a class='page-link' href='?page_no=2'>2</a></li>";
    echo "<li><a class='page-link'>...</a></li>";
    for (
         $counter = $total_no_of_pages - 6;
         $counter <= $total_no_of_pages;
         $counter++
         ) {
         if ($counter == $page_no) {
      echo "<li class='active page-link'><a>$counter</a></li>";	
      }else{
            echo "<li><a  class='page-link' href='?page_no=$counter'>$counter</a></li>";
      }                   
         }
  }
 }
 

  
 ?>

<li> 
<a <?php 
echo "class='page-link' href='?page_no=$next_page'";
?>>Next &rsaquo;</a>
</li>
 
<?php 
echo "<li><a class='page-link'  href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";


?>
</ul>




</body>


</html>
<?php
}
