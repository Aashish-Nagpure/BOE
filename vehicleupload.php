<?php

session_start();
$con =  mysqli_connect('localhost','root','imAWESOME1234');
mysqli_select_db($con , 'project');

if(isset($_POST['submit']))
{
    $Vno = $_POST['Vnumber'];
    //RC
    $RC = $_FILES['rc'];
    $Rname = $RC['name'];
    $Rerror = $RC['error'];
    $Rtmp = $RC['tmp_name'];
    $Rext = explode('.',$Rname);
    $Rcheck = strtolower(end($Rext));
    //insurance
    $inc = $_FILES['insurance'];
    $Iname = $inc['name'];
    $Ierror = $inc['error'];
    $Itmp = $inc['tmp_name'];
    $Iext = explode('.',$Iname);
    $Icheck = strtolower(end($Iext));
    $mail=$_SESSION['E-MAIL'];
    $allowed = array('jpg','jpeg','png');

    if(in_array($Rcheck,$allowed) && in_array($Icheck,$allowed))
    {
        $destinationfile = 'images/'.$Rname;
        move_uploaded_file($Rtmp,$destinationfile);
        $destinationfile1 = 'images/'.$Iname;
        move_uploaded_file($Itmp,$destinationfile1);
        $q = "UPDATE details SET VehicleNo='$Vno',RC='$destinationfile',Insurance='$destinationfile1' WHERE email='$mail'";
        mysqli_query($con , $q);
        header('location:home.php');
    }

}
