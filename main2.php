
<?php
include 'db.php';

$name=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];


$result1 = "select name from registeredusers where name = '$name'";
$result2 = "select password from registeredusers where name = '$name'";
$result3="select email from registeredusers where name = '$name'"; 
$query1=mysqli_query($conn,$result1);
echo mysqli_error($conn);
$query2=mysqli_query($conn,$result2);
echo mysqli_error($conn);
$query3=mysqli_query($conn,$result3);
echo mysqli_error($conn);

$name_value = mysqli_fetch_array($query1);
$pass_value=mysqli_fetch_array($query2);
$email_value=mysqli_fetch_array($query3);

if($name == $name_value[0] && $password == $pass_value[0] && $email == $email_value[0]) { 
    echo'<br>Login successful!';



}
else
{
    echo'The username or password are incorrect!<br>';
  
}


?>
