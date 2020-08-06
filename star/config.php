<?php 
//change the values with your own hosting setting
 $mysql_host = "localhost";

 $mysql_user = "root";
 $mysql_password = "";

 $conn = mysqli_connect($mysql_host,  $mysql_user,  $mysql_password);

 if(!$conn)
 
 {
 
 die("failed".mysqli_error());
 
 }
 

 $dbname="rating";
 $db=mysqli_select_db($conn,$dbname);
?>