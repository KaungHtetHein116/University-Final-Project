
<?php

   $username =$_POST ['username'];
   $password =$_POST['password'];

   session_start();

  
    $con=mysqli_connect("localhost","root","","login");
    $result=mysqli_query($con,"SELECT * FROM `login_page` WHERE `username`='$username' && `password`='$password'");
    $count=mysqli_num_rows($result);
    if($count==1)
    {
       // echo "Log in success!";
        $_SESSION['log']=1;
        header("location:index.php");

    } 
    else
    {   
        $_SESSION['msg']="Please Fill Username and Password correctly!";
        header("location:start.php");
    }
?>
