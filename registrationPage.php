<?php
session_start();

if(isset($_SESSION["idExist"]) && $_SESSION["idExist"]==1){
    echo ("<script>alert('User already exist');</script>");
    $_SESSION["idExist"]=0; 
}
if(isset($_SESSION["emailExist"] )&& $_SESSION["emailExist"]==1){
    echo ("<script>alert('Email already exist');</script>"); 
    $_SESSION["emailExist"]=0; 
}
?>

<!DOCTYPE html>

<html lang="en">
 <head>
     <link  rel="stylesheet" type="text/css" href="webpage/style/registrationPage.css">
      <link href="webpage/Images/sitelogo.png" rel="shortcut icon" type="image/png" />
      <script src="webpage/javascript/logoutReload.js"></script>
     <meta charset ="UTF-8">
     <meta name="Registration" content="This page is used to register users to YourCellular.com">
     <title>Registration Page</title>
     <center><img class="regLogo" src="webpage/Images/largelogo.png", alt= "Logo", style="height: 70px; width: 200px" ></center>
 </head>
 
 
 <body>
     <center>
     <div id ="regPage">
         <h2>Create an account</h2>
         <form action="webpage/MySQL/registration.php" method ="POST">
             <br />
             First name
             <br />
             <input class="regBox" type="text" name="FirstName" placeholder="Enter your first name" required />
             <br /><br />
             Last name
             <br />
             <input class="regBox" type="text" name="LastName" placeholder="Enter your last name" required />
             <br /><br />
             Email address
             <br />
             <input class="regBox" type="email" name="Email" placeholder="Enter your email address" required />
             <br /><br />
             User Id
             <br />
             <input class="regBox" type="text" name="UserId" placeholder="Enter an user Id" required />
             <br /><br />
             Password
             <br />
             <input id="pss" class="regBox" type="password" name="Password" placeholder="Enter password" required />
             <br><br />
             Re-Type Password
             <br />
             <input id="repss" class="regBox" type="password" name="ReTypePassword" placeholder="Enter password again" required>
             <br><br />
             <input class="regBoxIn" type="submit" value="Register">
         </form>
         
     </div></center>
     <script src="webpage/javascript/retypePass.js"></script>
 </body>

<?php

include("webpage/includePages/defaultPageFooter.php");
?>
