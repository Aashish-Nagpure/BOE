<?php
session_start();
$con =  mysqli_connect('localhost','root','imAWESOME1234');// yaha pe first parameter is hostname it will be localhost only second parameter is username which you used to login  myphp where you have created a database and last parameter is password
mysqli_select_db($con , 'project');//yaha pe instead of project it will be your database name
//this much code is required to connect to database and below code can be changed according to what you want to do

$email = $_POST['email'];
$pass = $_POST['password'];
$pass2 = $_POST['password2'];
$pattern = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
$r=preg_match($pattern, $email);

$s = "select * from details where email = '$email'";
$result = mysqli_query($con , $s);
$num = mysqli_num_rows($result);
if($num == 1)
{
    echo "Email Already taken";
}
else if(strlen($pass)<=8)
{
    echo "Password length must be at least 8 characters";
}
else if($pass!=$pass2)
{
    echo "Passwords do not match ";
}
else if($r!=1)
{
    echo"Invalid Email";
}
else
{
    $reg = "INSERT INTO details(email,password)VALUES('$email','$pass')";
    mysqli_query($con , $reg);
    header('location:index.php');
}

?>
