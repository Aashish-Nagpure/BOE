<?php

session_start();


$con =  mysqli_connect('localhost','root','imAWESOME1234');


mysqli_select_db($con , 'project');

$email = $_POST['email'];
$pass = $_POST['password'];
$pass2 = $_POST['password2'];
$pattern = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
$r=preg_match($pattern, $email);

$s = "select * from hawaldar where email = '$email'";
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
    $reg = "INSERT INTO hawaldar(email,password)VALUES('$email','$pass')";
    mysqli_query($con , $reg);
    header('location:havaldar_login.php');
}

?>
