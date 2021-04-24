<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./profile_style1.css">
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



    <!-- end -->

    <!-- details card start -->

    <div class="container">
        <div class="detail-card">

            <div class="card" onclick="location.href='user_profile.php'">

                <div class="profile-img" >
                    <img src="" alt="">
                </div>
                <div class="details">
                    <p>Please Setup Profile first</p><br>
                    <span>
                        <p>#User Profile</p>
                    </span>

                </div>
                <div class="icon">
                    <img src="./img/profile open.svg" alt="">
                </div>

            </div>

            <div class="card" onclick="location.href='vehicle.php'" id="vehicle">

                <div class="profile-img">
                    <img src="./img/Group 560.svg" alt="">
                </div>
                <div class="details">
                    <p>Please Setup Profile first</p><br>
                    <span>
                        <p>#vehicle Profile</p>
                    </span>

                </div>
                <div class="icon">
                    <img src="./img/profile open.svg" alt="">
                </div>

            </div>


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
