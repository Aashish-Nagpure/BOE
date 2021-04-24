<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./trans_style.css">
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


    <div class="container" id="transactions">
        <h1>Transactions:</h1>

        <div style="overflow-x:auto;">
            <table>
                <tr>
                    <th>Date</th>
                    <th>Driver</th>
                    <th>Rules Broken</th>
                    <th>Amount</th>
                    <th>Vehicle Number</th>

                </tr>
                <tr>
                    <?php session_start();
                    $con =  mysqli_connect('localhost','root','imAWESOME1234');
                    mysqli_select_db($con , 'project');
                    $mail=$_SESSION['E-MAIL'];
                    $result = mysqli_query($con,"select * from fines WHERE email='$mail'");
                    while($row=mysqli_fetch_array($result))
                    {

                    ?>
                    <td><?php echo $row['fine_date']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['fine_broken']; ?></td>
                    <td><?php echo $row['amount']; ?></td>
                    <td><?php echo $row['VehicleNo']; ?></td>

                </tr>


              <?php } ?>
            </table>
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
