<?php
include 'db2.php';

$name=$_POST['genre'];
$year=$_POST['year'];



$result1 = "select NAME from moviesname where GENRE = '$name' && GENRE='$year'";
$query1=mysqli_query($conn,$result1);
echo mysqli_error($conn);
?>