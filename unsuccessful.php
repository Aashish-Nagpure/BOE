<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./unsuccess_style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <!-- navigation start -->

    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="home.php" id="active"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
      <a href="charge.php"><i class="fa fa-address-book" aria-hidden="true"></i>Charge Fine</a>
      <a href="profile.php"><i class="fa fa-user" aria-hidden="true"></i>Profiles</a>
      <a href="edit_profile.php"><i class="fa fa-user" aria-hidden="true"></i>Edit/Setup Profiles</a>
      <a href="transactions.php"><i class="fa fa-address-book" aria-hidden="true"></i>View Charged Fines</a>
      <a href="logout.php"><i class="fa fa-power-off" aria-hidden="true"></i>Logout</a>
    </div>

    <div class="container">
        <div class="header">
            <img src="./img/LOGO.svg" alt="">
            <span onclick="openNav()"> <img src="./img/Menu.svg" alt=""></span>
        </div>
    </div>

    <!-- navigation end -->
    <div class="sucess">
        <div class="svg-container">

            <img src="./img/failed.svg" alt="">
            <p>fine failed</p>

        </div>


    </div>
    <div class="fixed">
    <div class="button"><button>Done</button></div>
</div>







    <script>

        let path = document.querySelector(".tick");
        let length = path.getTotalLength();

        console.log(length);

        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
</body>

</html>
