<?php

$server = "localhost";
$user = "root";
$pass = "";
$dbname = "db1";

$conn = new mysqli($server, $user, $pass, $dbname);

if($conn->connect_error)
{
    die("Connection failed:" . $conn->connect_error);
}

//$con= mysql_connect("localhost","root","") or die("Cannot connect. Check your Web Server.");
//mysql_select_db("db1",$con) or die ("Cannot connect to the database. Please check your host Connection");
?>