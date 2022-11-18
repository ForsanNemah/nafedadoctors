<?php

session_start();

$host="localhost";
$db_user="root";
$db_password="";
$db_name="nafeda";
$con = mysqli_connect($host,$db_user,$db_password,$db_name);

$_SESSION['host']=$host;
$_SESSION['db_user'] = $db_user;
$_SESSION['db_password'] = $db_password;
$_SESSION['db_name'] = $db_name;
 
  

?>

