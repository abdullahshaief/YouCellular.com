
<?php
   session_start();
   
   // The following function logsout an inactive user after 5 minutes
   
   include("webpage/PHP/autoLogout.php");

// This boolean statement prints an alert when a logged in user tries to access
// an empty shopping cart

if(isset($_SESSION["cartEmpty"]) && $_SESSION["cartEmpty"]==1){
  
  echo("<script>alert('Sorry, cart is empty. Redirected to homepage!');</script>");
  $_SESSION["cartEmpty"]=0;
}

?>
<!DOCTYPE html>
<html>
    <head>
    <link type="text/css" rel="stylesheet" href="webpage/style/defaultPageStructure.css">
    <link type="text/css" rel="stylesheet" href="webpage/style/homePageStyle.css">
    <script src="webpage/javascript/loginDropDown.js"></script>
    <script src="webpage/javascript/logoutReload.js"></script>
    </head>
    <body>
<?php
include("webpage/includePages/defaultPageHeader.php");

?>

    <link rel="stylesheet" href="webpage/style/homepageStyle.css" type="text/css" />
     <link href="webpage/Images/sitelogo.png" rel="shortcut icon" type="image/png" />
    <h2 style="margin-top: 0px; position:relative;">Why we are the best of them all?</h2>

   <pre class="whyBest">
        Your Cellular is solely served to benifit it's customers,
             and keep our customes satisfied as we offer less stressful services
                   our motto is you the customer come first and deserve the best deal 
                       and best service in the US             
   </pre>


  <?php
include("webpage/includePages/defaultPageFooter.php");

?>

<?php
 
if(isset($_SESSION["login"]) && $_SESSION["login"] == 1){

   $_SESSION["inactivityTimer"] = time();


}
 
?>