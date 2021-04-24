<?php
session_start();
$con =  mysqli_connect('localhost','root','imAWESOME1234');
mysqli_select_db($con , 'project');
if(isset($_POST["submit"]))
{
$h_id = $_POST["h_id"];
$_SESSION['hid']=$h_id;
$username = $_POST["name"];
$amount = $_POST["total"];
$fine = $_POST["choice"];
$a = implode(",",$fine);
$mail=$_POST["email"];
$_SESSION['email1']=$mail;
$fine_date=$_POST["fine_date"];
$vehicle_number=$_POST["vehicle_number"];
$q = "INSERT INTO fines (fine_broken,amount,email,fine_date,VehicleNo,username,h_id)VALUES('$a','$amount','$mail','$fine_date','$vehicle_number','$username','$h_id')";
$result=mysqli_query($con,$q);
if($result==1)
{
  header("location:success.php");
}
else {
  header("location:unsuccessful.php");
}
}
?>
