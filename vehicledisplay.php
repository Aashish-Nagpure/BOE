<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./vd_style.css">
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
                    <img class="imgg" src="./img/Group 560.svg" alt="">
                </div>
            </div>
            <div class="vehicle-no">
                <p><?php session_start();
                    $con =  mysqli_connect('localhost','root','imAWESOME1234');
                    mysqli_select_db($con , 'project');
                    $mail=$_SESSION['E-MAIL'];
                    $result = mysqli_query($con,"select VehicleNo from details where email='$mail'");
                    while($row=mysqli_fetch_array($result))
                    {
                        if($row['VehicleNo']==NULL)
                        {
                          echo "Please Setup profile first";
                        }
                        else {


                        echo $row['VehicleNo'];
                      }
                    } ?></p>
            </div>
        </div>
    </div>

    <!-- end -->

    <!-- details card start -->



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
