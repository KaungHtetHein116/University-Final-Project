<html>
<body>
<form name="frm" method="POST" action="update.php">
<table>
<table border=1 align=center>
<tr>
<td>
<table>
<?php

require_once('dbconnect.php');
if (isset($GET['barcode']))
{
$id = $_GET['barcode'];
$sql = ("SELECT * FROM barcode WHERE id= '.$id'");
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
while($row = mysqli_fetch_array($result))
{
//$user_name=$row['user_name'];
/*$txtbarcode = $row['barcode'];
$txtproduct = $row['product'];
$txtheight = $row['height'];
$txtwidth = $row['width'];
$txtthickness = $row['thickness'];
$txtvolume = $row['volume'];
$txtweight = $row['weight'];
$txtprice = $row['price'];*/
?>

<tr>
<td> Barcode:</td><td><INPUT type="text" name="txtbarcode" value="<?php echo $row['barcode'];?>"> </td></tr>
<tr>
<td> Product Name:</td><td><INPUT type="text" name="txtproduct" value="<?php echo $row['product']?> "> </td></tr>
<tr>
<td> Height:</td><td><INPUT type="text" name="txtheight" value="<?php echo $row['height']?> "> </td></tr>
<tr>
<td> Width:</td><td><INPUT type="text" name="txtwidth" value="<?php echo $row['width']?> "> </td></tr>
<tr>
<td> Thickness:</td><td><INPUT type="text" name="txtthickness" value="<?php echo $row['thickness']?> "> </td></tr>
<tr>
<td> Volume:</td><td><INPUT type="text" name="txtvolume" value="<?php echo $row['volume']?> "> </td></tr>
<tr>
<td> Weight:</td><td><INPUT type="text" name="txtweight" value="<?php echo $row['weight']?> "> </td></tr>
<tr>
<td> Price:</td><td><INPUT type="text" name="txtprice" value="<?php echo $row['price']?> "> </td></tr>
<tr>
<td><INPUT type="hidden" name="id" value=<?php echo $row['id']?>" /> </td>
</tr>
<tr>
<tr><td colspan=2><center><INPUT type="submit" value="Update" />
<INPUT type="button" value="Back"
onClick="window.location.href='index.php'" /></center></td></tr>
<?php 
}
} ?>
</table>
</form>
</html>
</body>
 