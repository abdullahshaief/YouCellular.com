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
    <!--Css files-->
<script src="webpage/javascript/logoutReload.js"></script>
    <link href="webpage/Images/sitelogo.png" rel="shortcut icon" type="image/png" />
    <title>Your cellular</title>
  <script src="webpage/javascript/loginDropDown.js"></script>
</head>

<body>
<?php
      include("webpage/includePages/defaultPageHeader.php");
?>
     <!-- Every page has same layout for the navigation and logos. The section below is written for the new pages-->
 
         <div id="shopItems">
        <a  href="phones.php">Phones</a>
        <a  href="accessories.php">Accessories</a>
        
          <?php
   
include("webpage/MySQL/databaseConnection.php");

   $query = "SELECT * FROM products_accessories";
   $result = mysqli_query($connection, $query);

 
   while($row = mysqli_fetch_row($result)){


    echo  ('</div>');

   echo  ("<div class=\"img\">");
   echo  ("   <a target=\"_blank\"href=\"accessoriesInfo.php?id=$row[0]\">");
   echo  ("       <img src=\"".$row[1]."\" width=\"150\" height=\"200\"; />");
   echo  ("    </a>");
   echo  ("   <div class=\"description\"> ".$row[4]."<br /> <a href=\"accessoriesInfo.php?id=$row[0]\">More info</a></div>");
   echo  ("   </div>");


   }

 ?>      
      
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