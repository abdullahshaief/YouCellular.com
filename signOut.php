<?php
  session_start();
 
 if((isset($_SESSION["login"]))&& $_SESSION["login"]== 1){
    $_SESSION["login"]= 0;
    $_SESSION["user"]="";
    header("Location: homePage.php");
  }
?>