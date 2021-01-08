<?php
session_start();
?>

<!DOCTYPE html>

<html>  
<head>
  
   <link rel="stylesheet" a href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"/>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <style>
  body{
   
    background-image: url("image/store.jpg");
	background-repeat: no-repeat;
	background-size: 100%;
    }

      .box2{
        margin: auto;
        width: 500px;
        height: 500px;
        border:2px solid #aaa; 
        border-radius: 18px;
        text-align: center;
    
        background-color: rgba(44, 62, 80,0.7);
        margin-top: 100px;
    
      
         }
 
    .box2 img{
                width: 300px;
                height: 300px; 
                border:2px solid white; 
                border-radius: 50%;
                margin-top: 20px;
                background-color: #27ae60;
                 }   
          .logout{
               float: right;
               margin-right: 10px;
                margin-top: -100px;
           }
  </style>
  
</head>
   <body> 
        <div class="logout">
         <a href=start.php class= 'mt-5 btn btn-warning'>LOGOUT</a>
          </div>
   
       <div class="box2">
      <h1 style='color:pink'> WELCOME</h1> 
         <img src="image/thai-costume-sawasdee.jpg">
         <div class="tf">
         <a href=bbb.php class= 'mt-5 btn btn-info btn-lg'>START</a>
          </div>
       </div>
   
    </body>
    </html>

<?php
require_once('dbconnect.php');


$truncatetable= ("TRUNCATE TABLE calculation");
$result1 = mysqli_query($conn, $truncatetable);

$truncatetable1= ("TRUNCATE TABLE smallbag");
$result2 = mysqli_query($conn, $truncatetable1);

$truncatetable2= ("TRUNCATE TABLE mediumbag");
$result3 = mysqli_query($conn, $truncatetable2);

$truncatetable3= ("TRUNCATE TABLE largebag");
$result4 = mysqli_query($conn, $truncatetable3);

$truncatetable4= ("TRUNCATE TABLE extralargebag");
$result5 = mysqli_query($conn, $truncatetable4);

?>
<?php
  shell_exec("gpio mode 21 out");
    shell_exec("gpio mode 22 out");
    shell_exec("gpio mode 23 out");
    shell_exec("gpio mode 24 out");
    shell_exec("gpio mode 1 out");
    shell_exec("gpio mode 4 out");
    shell_exec("gpio mode 5 out");
    shell_exec("gpio mode 6 out");

                         shell_exec("gpio write 21 0");
                        shell_exec("gpio write 22 0");
                        shell_exec("gpio write 23 0");
                        shell_exec("gpio write 24 0");
                          shell_exec("gpio write 1 0");
                        shell_exec("gpio write 4 0");
                        shell_exec("gpio write 5 0");
                        shell_exec("gpio write 6 0");
                         
        ?>