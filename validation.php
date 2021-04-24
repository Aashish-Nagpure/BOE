<?php

session_start();
$con =  mysqli_connect('localhost','root','imAWESOME1234');
mysqli_select_db($con , 'project');

$email = $_POST['email'];
$pass = $_POST['password'];

$s = "select * from details where email = '$email' && password = '$pass'";
$result = mysqli_query($con , $s);
$num = mysqli_num_rows($result);
if($num == 1)
{
    $_SESSION['E-MAIL']=$email;
    header('location:home.php');
}
else
{

    echo "wrong pass or email";
}

?>
