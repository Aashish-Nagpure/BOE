<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./home_style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

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
            <img src="./Group 551.svg" alt="">
           <span onclick="openNav()"> <img src="./Group 553.svg" alt=""></span>
        </div>
        <div class="welcome">
            <div class="headline">
                <p>Welcome ! <br>Daily News</p>
            </div>
            <div class="ser"><input type="search" id="searchbar" name="search" onkeyup="search_news()" placeholder="search"></div>

        </div>

        <div class="wrapper">
            <div class="card news">
                <div class="card-banner">
                    <img src="./img1.jpg" alt="">
                </div>
                <div class="card-body ">
                    <p >Traffic in mumbai increased due to rain</p>
                    <div class="desc">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="card news">
                <div class="card-banner">
                    <img src="./img2.jpg" alt="">
                </div>
                <div class="card-body">
                    <p >Accidents rate has been increased</p>
                    <div class="desc">
                        <p></p>
                    </div>
                </div>
            </div><div class="card news">
                <div class="card-banner">
                    <img src="./img3.jpg" alt="">
                </div>
                <div class="card-body">
                    <p >Government planning to take fine system to digital</p>
                    <div class="desc">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>




<script>

function search_news() {
    let input = document.getElementById('searchbar').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('news');

    for (i = 0; i < x.length; i++) {
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="list-item";
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
