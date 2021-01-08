<html>
<head>
<meta name="viewport" content="width=device-width" />
<title>Raspberry Pi WiFi Controlled LED</title>
</head>
       <body>
       <center><h1>Control LED using Raspberry Pi Webserver</h1>      
         <form method="GET">                
            <input type="submit" style = "font-size: 14 pt" value="OFF" name="off">
            <input type="submit" style = "font-size: 14 pt" value="Blue" name="blue">
            <input type="submit" style = "font-size: 14 pt" value="Green" name="green">
            <input type="submit" style = "font-size: 14 pt" value="Red" name="red">
            <input type="submit" style = "font-size: 14 pt" value="Yellow" name="yellow">
            <input type="submit" style = "font-size: 14 pt" value="dBlue" name="dblue">
            <input type="submit" style = "font-size: 14 pt" value="dGreen" name="dgreen">
            <input type="submit" style = "font-size: 14 pt" value="dRed" name="dred">
            <input type="submit" style = "font-size: 14 pt" value="dYellow" name="dyellow">
         </form>
                         </center>
<?php
    shell_exec("gpio mode 21 out");
    shell_exec("gpio mode 22 out");
    shell_exec("gpio mode 23 out");
    shell_exec("gpio mode 24 out");
    shell_exec("gpio mode 1 out");
    shell_exec("gpio mode 4 out");
    shell_exec("gpio mode 5 out");
    shell_exec("gpio mode 6 out");
    $count=0;
    if(isset($_GET['off']))
        {                 
           //$count=0;
                        echo "LED is off";
              
                    //shell_exec ("gpio cleanup");
                     
                      shell_exec("gpio write 21 0");
                       
                      
                        shell_exec("gpio write 22 0");
                        shell_exec("gpio write 23 0");
                        shell_exec("gpio write 24 0");
                          shell_exec("gpio write 1 0");
                        shell_exec("gpio write 4 0");
                        shell_exec("gpio write 5 0");
                        shell_exec("gpio write 6 0");
                        
        }
            else if(isset($_GET['blue']))
            {          
                         // $count=1;
                         
                         echo "LED is on";
                         //while($count=1){
                      //  shell_exec("gpio write 21 1");
                        //   shell_exec("gpio write 22 0");
                        // }
                       while ($count<100){
                         $count++;
                         shell_exec("gpio write 21 1");
                         sleep (0.9);
                        shell_exec("gpio write 21 0");
                       // sleep (1);
                         shell_exec("gpio write 22 1");
                         sleep (0.9);
                        shell_exec("gpio write 22 0");
                       // sleep (0.7);
                        shell_exec("gpio write 23 1");
                         sleep (0.9);
                        shell_exec("gpio write 23 0");
                       // sleep (0.7);
                         shell_exec("gpio write 24 1");
                         sleep (0.9);
                        shell_exec("gpio write 24 0");
                        //sleep (0.7);
                         }
                          /* shell_exec("gpio write 21 1"); 
                       shell_exec("gpio write 22 0");
                        shell_exec("gpio write 23 0");
                        shell_exec("gpio write 24 0");
                          shell_exec("gpio write 1 0");
                        shell_exec("gpio write 4 0");
                        shell_exec("gpio write 5 0");
                        shell_exec("gpio write 6 0");
                 */
                        
            }
            else if(isset($_GET['green']))
            {           
                         $count=2;
                         ///  while($count=2){
                      //  echo "LED is on";
                        shell_exec("gpio write 22 1");
                         shell_exec("gpio write 21 0");
                        // }
                        shell_exec("gpio write 23 0");
                        shell_exec("gpio write 24 0");
                          shell_exec("gpio write 1 0");
                        shell_exec("gpio write 4 0");
                        shell_exec("gpio write 5 0");
                        shell_exec("gpio write 6 0");
            }
            else if(isset($_GET['red']))
            {
                        echo "LED is on";
                        shell_exec("gpio write 23 1");
                         shell_exec("gpio write 22 0");
                        shell_exec("gpio write 21 0");
                        shell_exec("gpio write 24 0");
                          shell_exec("gpio write 1 0");
                        shell_exec("gpio write 4 0");
                        shell_exec("gpio write 5 0");
                        shell_exec("gpio write 6 0");
            }
            else if(isset($_GET['yellow']))
            {
                        echo "LED is on";
                        shell_exec("gpio write 24 1");
                         shell_exec("gpio write 22 0");
                        shell_exec("gpio write 23 0");
                        shell_exec("gpio write 21 0");
                         shell_exec("gpio write 1 0");
                        shell_exec("gpio write 4 0");
                        shell_exec("gpio write 5 0");
                        shell_exec("gpio write 6 0");
            }
       
            else if(isset($_GET['dblue']))
            {
                        echo "LED is on";
                        shell_exec("gpio write 6 1");
                        shell_exec("gpio write 21 1");
                         shell_exec("gpio write 22 0");
                        shell_exec("gpio write 23 0");
                        shell_exec("gpio write 24 0");
                        shell_exec("gpio write 1 0");
                        shell_exec("gpio write 4 0");
                        shell_exec("gpio write 5 0");
                        
            }
            else if(isset($_GET['dgreen']))
            {
                        echo "LED is on";
                        shell_exec("gpio write 5 1");
                        shell_exec("gpio write 22 1");
                         shell_exec("gpio write 21 0");
                        shell_exec("gpio write 23 0");
                        shell_exec("gpio write 24 0");
                        shell_exec("gpio write 1 0");
                        shell_exec("gpio write 4 0");
                        shell_exec("gpio write 6 0");
            }
            else if(isset($_GET['dred']))
            {
                        echo "LED is on";
                        shell_exec("gpio write 4 1");
                        shell_exec("gpio write 23 1");
                         shell_exec("gpio write 22 0");
                        shell_exec("gpio write 21 0");
                        shell_exec("gpio write 24 0");
                        shell_exec("gpio write 1 0");
                        shell_exec("gpio write 5 0");
                        shell_exec("gpio write 6 0");
            }
            else if(isset($_GET['dyellow']))
            {
                        echo "LED is on";
                        shell_exec("gpio write 1 1");
                        shell_exec("gpio write 24 1");
                         shell_exec("gpio write 22 0");
                        shell_exec("gpio write 23 0");
                        shell_exec("gpio write 21 0");
                        shell_exec("gpio write 4 0");
                        shell_exec("gpio write 5 0");
                        shell_exec("gpio write 6 0");
            }
            echo "<br>";
            echo  "$count"; 
?>
   </body>
</html>