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
<h4 style=color:yellow> PRODUCT
<input type="text" name="product" class='ml-3'/></div>

<div class="form_input">
<h4 style=color:yellow> HEIGHT
<input type="text" name="height" class='ml-5' /></div>

<div class="form_input">
<h4 style=color:yellow> WIDTH
<input type="text" name="width" class='ml-5'/></div>

<div class="form_input">
<h4 style=color:yellow> THICKNESS
<input type="text" name="thickness"   /></div>

<div class="form_input">
<h4 style=color:yellow> VOLUME
<input type="text" name="volume" class='ml-4'/></div>

<div class="form_input">
<h4 style=color:yellow> WEIGHT
<input type="text" name="weight" class='ml-4'/></div>
<div class="form_input">
<h4 style=color:yellow> PRICE
<input type="text" name="price" class='ml-4'/></div>

<input type=submit value='SAVE' class='btn btn-success ml-5' /> 
<input type=reset value='CLEAR' class='btn btn-danger ml-3'>
<a href='index.php' class='btn btn-info ml-3'>Back To Database</a>



</form>
</div>
</body>
</html>

