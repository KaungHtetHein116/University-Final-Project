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
    shell_exec("gpio write 1 0");
    shell_exec("gpio write 4 0");
    shell_exec("gpio write 5 0");
    shell_exec("gpio write 6 0");
    shell_exec("gpio write 24 0");
    sleep(1);
    shell_exec("gpio write 24 1");
    
    
    
?>