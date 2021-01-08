<?php
session_start();
?>

<!DOCTYPE html>

<html>  
<head>
   <link rel="stylesheet" a href="style/color.css"/>
   <link rel="stylesheet" a href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"/>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  
</head>
   <body> 
     
   <div class="container">
   

      
      <div class="box1">
         
      
      <h1 style='color:pink'> FOR ADMIN</h1> 
      <img src="image/login.png">
      <?php if (isset($_SESSION['msg'])): ?>
	   <div class="msg">
		<?php 
			echo $_SESSION['msg']; 
			unset($_SESSION['msg']);
		?>
	   </div>
      <?php endif ?>
         <form method="POST" action="login.php">
            <div class="form_input">
               <i class="fa fa-user icon"></i>
               <input type="text" name="username" placeholder="Enter Your User Name"autofocus required/><br/>
            </div>
            <div class="form_input">
                <i class="fa fa-key icon"></i>
                <input type="password" name="password" placeholder="Enter Your Password" autofocus required/><br/>
            </div>
                <input type="submit" name="submit" value="LOGIN" class="btn-login"/>
               
            </form>
      </div>    
      <div class="box2">
      <h1 style='color:pink'> FOR CUSTOMER</h1> 
         <img src="image/customer.png">
         <div class="tf">
         <a href=customer.php class= 'mt-5 btn btn-info btn-lg'>CUSTOMER</a>
          </div>
       </div>
    </div>
    </body>
    </html>
<?php
  session_destroy();
  
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