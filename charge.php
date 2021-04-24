<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./chargestyle.css">
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


<form name="listForm" action="fine1.php" method="post">
    <div class="container">
        <div class="detail-card">

            <div class="card">

                <div class="profile-img">
                    <img src="./img/Calender.svg" alt="">
                </div>

                <input type="date" id="date" name="fine_date" placeholder="enter date" required>

            </div>
            <div class="card">

                <div class="profile-img">
                    <img src="./img/enter licence.svg" alt="">
                </div>
                <input type="text" placeholder="Enter vehicle number" name="vehicle_number" required>
                <input type="email" placeholder="Enter the email" name="email" required>
            </div>
            <div class="card">

                <div class="profile-img">

                </div>
                <input type="text" placeholder="Enter name" name="name" required>

            </div>
            <div class="card">

                <div class="profile-img">

                </div>
                <input type="text" placeholder="Enter Hawaldar ID" name="h_id" required>

            </div>
        </div>
        <div class="searchrule">
            <input type="text" name="" id="myInput"  onkeyup="myFunction()" placeholder="search-rule-broken">
        </div><br>

    </div>
<div class="container">


            <ul id="myUL">
            <li><a href="#"><div class="pad"> <input type="checkbox" name="choice[]" value="General Offence" /> <span> General Offence</span><br /></div></a></li>
            <li><a href="#"><div class="pad"> <input type="checkbox" name="choice[]" value="Travel without ticket" /> <span> Travel without ticket</span><br /></div></a></li>
            <li><a href="#"><div class="pad"> <input type="checkbox" name="choice[]" value="Refusing to Share Demanded Information" /> <span> Refusing to Share Demanded Information</span><br /></div></a></li>
            <li><a href="#"><div class="pad"> <input type="checkbox" name="choice[]" value="Driving an Unauthorized Vehicle without License" /> <span> Driving an Unauthorized Vehicle without License</span><br /></div></a></li>
            <li><a href="#"><div class="pad"> <input type="checkbox" name="choice[]" value="Driving Without License" /> <span> Driving Without License</span><br /></div></a></li>
            <li><a href="#"><div class="pad"> <input type="checkbox" name="choice[]" value="Driving With Disqualified License" /> <span> Driving With Disqualified License</span><br /></div></a></li>
            <li><a href="#"><div class="pad"> <input type="checkbox" name="choice[]" value="Overspeeding" /> <span> Overspeeding</span><br /></div></a></li>
            <li><a href="#"><div class="pad"> <input type="checkbox" name="choice[]" value=" Rash Driving" /> <span> Rash Driving</span><br /></div></a></li>
            <li><a href="#"><div class="pad"> <input type="checkbox" name="choice[]" value="Driving Under Influence of Alcohol" /> <span> Driving Under Influence of Alcohol</span><br /></div></a></li>
            <li><a href="#"><div class="pad"> <input type="checkbox" name="choice[]" value=" Driving Oversized Vehicles without permission" /> <span> Driving Oversized Vehicles without permission</span><br /></div></a></li>
            <li><a href="#"><div class="pad"> <input type="checkbox" name="choice[]" value="Driving When Mentally/Physically Unfit" /> <span> Driving When Mentally/Physically Unfit</span><br /></div></a></li>
            <li><a href="#"><div class="pad"> <input type="checkbox" name="choice[]" value="Accident Related Offences" /> <span> Accident Related Offences</span><br /></div></a></li>
            <li><a href="#"><div class="pad"> <input type="checkbox" name="choice[]" value="Driving Uninsured Vehicle (without valid Insurance)" /> <span> Driving Uninsured Vehicle (without valid Insurance)</span><br /></div></a></li>
            <li><a href="#"><div class="pad"> <input type="checkbox" name="choice[]" value="Racing and Speed-testing" /> <span> Racing and Speed-testing</span><br /></div></a></li>
            <li><a href="#"><div class="pad"> <input type="checkbox" name="choice[]" value="Vehicle Without Permit" /> <span> Vehicle Without Permit</span><br /></div></a></li>
            <li><a href="#"><div class="pad"> <input type="checkbox" name="choice[]" value=" Aggregators (Violations of Licensing Conditions)" /> <span> Aggregators (Violations of Licensing Conditions)</span><br /></div></a></li>
            <li><a href="#"><div class="pad"> <input type="checkbox" name="choice[]" value="Overloading" /> <span> Overloading</span><br /></div></a></li>
            <li><a href="#"><div class="pad"> <input type="checkbox" name="choice[]" value="Overloading of Passengers" /> <span> Overloading of Passengers</span><br /></div></a></li>
            <li><a href="#"><div class="pad"> <input type="checkbox" name="choice[]" value="Not Wearing Seatbelt" /> <span> Not Wearing Seatbelt</span><br /></div></a></li>
            <li><a href="#"><div class="pad"> <input type="checkbox" name="choice[]" value=" Overloading of Two-Wheelers" /> <span> Overloading of Two-Wheelers</span><br /></div></a></li>
            <li><a href="#"><div class="pad"> <input type="checkbox" name="choice[]" value="Not Wearing Helmet" /> <span> Not Wearing Helmet</span><br /></div></a></li>
            <li><a href="#"><div class="pad"> <input type="checkbox" name="choice[]" value="Not Providing Way for Emergency Vehicles" /> <span> Not Providing Way for Emergency Vehicles</span><br /></div></a></li>
            <li><a href="#"><div class="pad"> <input type="checkbox" name="choice[]" value="Offences by Juveniles" /> <span> Offences by Juveniles</span><br /></div></a></li>
            <li><a href="#"><div class="pad"> <input type="checkbox" name="choice[]" value="Power of Officers to Impound Documents" /> <span> Power of Officers to Impound Documents</span><br /></div></a></li>
            <li><a href="#"><div class="pad"> <input type="checkbox" name="choice[]" value="Offences Committed by Enforcing Officers" /> <span> Offences Committed by Enforcing Officers</span><br /></div><br><br><br><br><br></a></li>
            </div>
            <div class="total">
               <span>Enter Amount:</span> <input type="text" size="2" name="total" placeholder="INR" required><br><br>
               <button name="submit" id="submit">Next</button>
            </div>
        </form>
    <script>

function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }


    </script>
</body>

</html>
