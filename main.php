<?php

include 'db.php';

if(isset($_POST['submit'])){
   
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$address=$_POST['address'];



//$query1="create table registeredusers (name varchar(20),password varchar(20),email varchar(20),address varchar(20))";


$query2="insert into registeredusers values('$name','$password','$email','$address')";


//$query1=mysqli_query($conn,$query1);
//echo mysqli_error($conn);



mysqli_query($conn,$query2);
echo'Record has been added to the database successfully!';

echo mysqli_error($conn);


}

mysqli_close($conn);
?>