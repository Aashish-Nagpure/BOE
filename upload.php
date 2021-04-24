<?php

session_start();
$con =  mysqli_connect('localhost','root','imAWESOME1234');
mysqli_select_db($con , 'project');

if(isset($_POST['submit']))
{
    $username = $_POST['name'];
    $DOB = $_POST['dob'];
    $gender = $_POST['gender'];
    $Lno = $_POST['license'];
    $Ano = $_POST['adhaar'];
    $Contact = $_POST['contact'];
    //License
    $Limg = $_FILES['license-image'];
    $Lname = $Limg['name'];
    $Lerror = $Limg['error'];
    $Ltmp = $Limg['tmp_name'];
    $Lext = explode('.',$Lname);
    $Lcheck = strtolower(end($Lext));
    //Adhaar
    $Aimg = $_FILES['adhaar-image'];
    $Aname = $Aimg['name'];
    $Aerror = $Aimg['error'];
    $Atmp = $Aimg['tmp_name'];
    $Aext = explode('.',$Lname);
    $Acheck = strtolower(end($Lext));
    $allowed = array('jpg','jpeg','png');
    //profile pic
    $Pimg = $_FILES['profile'];
    $Pname = $Pimg['name'];
    $Perror = $Pimg['error'];
    $Ptmp = $Pimg['tmp_name'];
    $Pext = explode('.',$Pname);
    $Pcheck = strtolower(end($Pext));
    $mail=$_SESSION['E-MAIL'];


    if(in_array($Lcheck,$allowed) && in_array($Acheck,$allowed) && in_array($Pcheck,$allowed))
    {
       $destinationfile = 'images/'.$Lname;
        move_uploaded_file($Ltmp,$destinationfile);
        $destinationfile1 = 'images/'.$Aname;
        move_uploaded_file($Atmp,$destinationfile1);
        $destinationfile2 = 'images/'.$Pname;
        move_uploaded_file($Ptmp,$destinationfile2);
        $q = "UPDATE details SET username='$username',Lno='$Lno',Limg='$destinationfile',Gender='$gender',DOB='$DOB',Ano='$Ano',Aimg='$destinationfile1',Contact='$Contact',profile='$destinationfile2' WHERE email='$mail'";
        mysqli_query($con , $q);
        header('location:home.php');

    }

}
?>
