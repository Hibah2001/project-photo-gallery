<?php

  session_start();

  $appUsername = $_SESSION["authenticatedUser"];
  $_SESSION["message"] =  "You have logged out";
 
  session_unregister("authenticatedUser");

  // Relocate back to the login page
  header("Location: login.php");
  //session_destroy();   
?>   