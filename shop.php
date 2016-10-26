<?php
      session_start();
      include("webpage/PHP/autoLogout.php");
?>


<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--Css files-->
    <link rel="stylesheet" href="webpage/style/defaultPageStructure.css" type="text/css" />
    <link rel="stylesheet" href="webpage/style/shop.css" type="text/css" />
    <script src="webpage/javascript/loginDropDown.js"></script>
    <!--Css files-->

    <link href="webpage/Images/sitelogo.png" rel="shortcut icon" type="image/png" />
    <script src="webpage/javascript/logoutReload.js"></script>
    <title>Your cellular</title>
  
</head>

<body>
<?php 
     include("webpage/includePages/defaultPageHeader.php");
?>
     <!-- Every page has same layout for the navigation and logos. The section below is written for the new pages-->
 
     <div  id="shopItems">
        <a  href="phones.php">Phones</a>
        <a  href="accessories.php">Accessories</a>
    </div>

</body>

<?php
include("webpage/includePages/defaultPageFooter.php");
?>
  
  <?php

 // This bit of code tracks the time when a user logged in and 
 // stayed on a page for the ammount of time

if(isset($_SESSION["login"]) && $_SESSION["login"] == 1){

   $_SESSION["inactivityTimer"] = time();


}
 
?>