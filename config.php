<?php
  session_start();
  require_once "GoogleAPI/vendor/autoload.php";
  $gClient = new Google_Client();
  $gClient->setClientId("881401097488-pj7n4v6bpos08qjp01hitvot2i1opaoi.apps.googleusercontent.com");
  $gClient->setClientSecret("9PofW81P3qlj9QLl4yX2VUJb");
  $gClient->setApplicationName("Fine Pay");
  $gClient->setRedirectUri("http://localhost/Project/forms/signup/role/USER/g-callback.php");
  $gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
 ?>
