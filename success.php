<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./successful_style.css">
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

            <svg class="ft-green-tick" xmlns="http://www.w3.org/2000/svg" height="100" width="100" viewBox="0 0 48 48"
                aria-hidden="true">
                <circle class="circle" fill="#5bb543" cx="24" cy="24" r="22" />
                <path class="tick" fill="none" stroke="#FFF" stroke-width="6" stroke-linecap="round"
                    stroke-linejoin="round" stroke-miterlimit="10" d="M14 27l5.917 4.917L34 17" />
            </svg>
            <p>fine charged</p>

        </div>


    </div>
    <div class="fixed" onclick="location.href='home.php'">
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
