<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./pd_style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <!-- navigation start -->

    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="home.php" id="active"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
      <a href="transactions.php"><i class="fa fa-address-book" aria-hidden="true"></i>View Fines</a>
      <a href="profile.php"><i class="fa fa-user" aria-hidden="true"></i>Profiles</a>
      <a href="edit_profile.php"><i class="fa fa-user" aria-hidden="true"></i>Edit/Setup Profiles</a>
      <a href="logout.php"><i class="fa fa-power-off" aria-hidden="true"></i>Logout</a>
    </div>

    <div class="container">
        <div class="header">
            <img src="./img/LOGO.svg" alt="">
            <span onclick="openNav()"> <img src="./img/Menu.svg" alt=""></span>
        </div>
    </div>

    <!-- navigation end -->

    <!-- profile-name and img start -->

    <div class="user-profile">
        <div class="container">
            <div class="center">
                <div class="profile-img">
                    <img class="imgg" src="<?php
                    session_start();
                    $con =  mysqli_connect('localhost','root','imAWESOME1234');
                    mysqli_select_db($con , 'project');
                    $mail=$_SESSION['E-MAIL'];
                    $result = mysqli_query($con,"select profile from details where email='$mail'");
                    while($row=mysqli_fetch_array($result))
                    {
                        if($row['profile']==NULL)
                        {
                          echo "Please Setup profile first";
                        }
                        else
                        {
                        echo $row['profile'];
                        }
                    } ?> " alt="">
                </div>
            </div>
            <div class="user-name">
                <p><?php

                    $mail=$_SESSION['E-MAIL'];
                    $result = mysqli_query($con,"select username from details where email='$mail'");
                    while($row=mysqli_fetch_array($result))
                    {
                      if($row['username']==NULL)
                      {
                        echo "Please Setup profile first";
                      }
                      else
                      {
                        echo $row['username'];
                      }
                    }
?>
</p>
            </div>
        </div>
    </div>

    <!-- end -->

    <!-- details card start -->

    <div class="container">
        <div class="detail-card">
            <div class="card">
                <div class="left-sec">
                    <div class="icon-div"><img src="./img/Contact.svg" alt=""></div>
                    <div class="text-div">
                        <p>contact <br><span><?php
                    $mail=$_SESSION['E-MAIL'];
                    $result = mysqli_query($con,"select Contact from details where email='$mail'");
                    while($row=mysqli_fetch_array($result))
                    {
                      if($row['Contact']==NULL)
                      {
                        echo "Please Setup profile first";
                      }
                      else
                      {
                        echo $row['Contact'];
                      }
                    }
?></span></p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="left-sec">
                    <div class="icon-div"><img src="./img/Calender.svg" alt=""></div>
                    <div class="text-div">
                        <p>D.O.B <br><span><?php


                    $mail=$_SESSION['E-MAIL'];
                    $result = mysqli_query($con,"select DOB from details where email='$mail'");
                    while($row=mysqli_fetch_array($result))
                    {
                      if($row['DOB']==NULL)
                      {
                        echo "Please Setup profile first";
                      }
                      else {


                        echo $row['DOB'];
                      }
                    }
?></span></p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="left-sec">
                    <div class="icon-div"><img src="./img/Licence.svg" alt=""></div>
                    <div class="text-div">
                        <p>Licence No. <br><span><?php


                    $mail=$_SESSION['E-MAIL'];
                    $result = mysqli_query($con,"select Lno from details where email='$mail'");
                    while($row=mysqli_fetch_array($result))
                    {
                      if($row['Lno']==NULL)
                      {
                        echo "Please Setup profile first";
                      }
                      else {


                        echo $row['Lno'];
                      }
                    }
?></span></p>
                    </div>
                </div>
                <div class="right-sec">
                    <img src="./img/Download.svg" alt="">
                </div>
            </div>

            <div class="card">
                <div class="left-sec">
                    <div class="icon-div"><img src="./img/Pan.svg" alt=""></div>
                    <div class="text-div">
                        <p>Adhaar no. <br><span><?php


                    $mail=$_SESSION['E-MAIL'];
                    $result = mysqli_query($con,"select Ano from details where email='$mail'");
                    while($row=mysqli_fetch_array($result))
                    {
                      if($row['Ano']==NULL)
                      {
                        echo "Please Setup profile first";
                      }
                      else {


                        echo $row['Ano'];
                      }
                    }
?></span></p>
                    </div>
                </div>
                <div class="right-sec">
                    <img src="./img/Download.svg" alt="">
                </div>
            </div>

        </div>
    </div>


<div class="download-qr">
    <div class="container" onclick="location.href='docs.php'">
        <button id="download-btn">Show documents</button>
    </div>
</div>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
</body>

</html>
