<?php

$servername = "localhost";
$username = "root";
$password = "";

//connection to mysql server
$conn = mysqli_connect($servername, $username, $password);

if(!$conn)

{

die("failed".mysqli_error());

}

echo "Connection successfully created! <br>";


$dbname="student_db";
$db=mysqli_select_db($conn,$dbname);

?>