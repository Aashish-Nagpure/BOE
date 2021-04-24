<?php


  require_once "config.php";
  $con =  mysqli_connect('localhost','root','imAWESOME1234');
  mysqli_select_db($con , 'project');
  if (isset($_GET['code']))
  {
    $token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
    $_SESSION['access_token'] = $token;
  }
  $oAuth = new Google_Service_Oauth2($gClient);
  $userData = $oAuth->userinfo_v2_me->get();
  $email = $userData['email'];
  $s = "select * from details where email = '$email'";
  $result = mysqli_query($con , $s);
  $num = mysqli_num_rows($result);
  if($num==1)
  {
    header('location:home.php');
    $_SESSION['E-MAIL']=$email;
  }
  else
  {
      $reg = "INSERT INTO details(email)VALUES('$email')";
      mysqli_query($con , $reg);
      header('location:index.php');
  }

 ?>
