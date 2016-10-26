<?php
      session_start();
      include("webpage/PHP/autoLogout.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <!--Css files-->
    <link rel="stylesheet" href="webpage/style/defaultPageStructure.css" type="text/css" />
    <link rel="stylesheet" href="webpage/style/phoneInfo.css" type="text/css" />
    <script src="webpage/javascript/loginDropDown.js"></script>
    <!--Css files-->
<script src="webpage/javascript/logoutReload.js"></script>
    <link href="webpage/Images/sitelogo.png" rel="shortcut icon" type="image/png" />
    <title>Your cellular</title>
  
</head>
<body>
 <?php

include("webpage/includePages/defaultPageHeader.php");

?>

  <div style="width: 100%;  ">
        <div  style=" float: left; overflow:auto;	padding-top: 60px;">

     <?php
   
include("webpage/MySQL/databaseConnection.php");
if(isset($_GET['id'])){
   $query = "SELECT * FROM products_accessories WHERE id= ".$_GET['id'];
   $result = mysqli_query($connection, $query);

 
  $row = mysqli_fetch_row($result);

  
   echo  ("<div class=\"phones\">");
   echo  ("<div class=\"img\" style=\"padding-left: 100px;\">");
   echo  ("   <a target=\"_blank\" href=\"".$row[1]."\">");
   echo  ("       <img src=\"".$row[1]."\" width=\"150\" height=\"200\"; />");
   echo  ("    </a>");
  
   echo  ("   </div>");
   echo  ("  </div>");



    
   echo(' </div> ');
     echo('   </div>');
      echo('          </div>');
      echo('  <div id="modelPr" style="width: 70%;float: right;">');
         
         echo("<p>$row[4]</p>") ;
         echo('<p>Price: $'.$row[5].'</p>') ;
      
        
      echo('  </br></br></br></br></br></br></br>');
}

// This is where I used PHP to send command when a link is clicked
?>

        <a 
        <?php 
        if(isset($row[0])){ $_SESSION["Cart"]=$row[0];
			                 $_SESSION["model"]=$row[4];
			                 }
       ?> <?php 
       if(isset($_GET['id']) && isset($_SESSION["login"]) && $_SESSION["login"] == 1){ 
           echo ('href="webpage/MySQL/addtoCart.php">Add To Cart</a>');
           } 
           else{
               echo 'href="webpage/MySQL/addtoCart.php">Login to buy</a>';
           }
           ?>

<?php
if(isset($_GET['id'])){
echo('</div>');
echo('<div></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>');
echo('<pre>');
   
   $row[3] =  str_ireplace('Network',"<p style=\" font-size: 200%;\">Network</p>",$row[3]);
   $row[3] =  str_ireplace('Launch',"<p style=\" font-size: 200%;\">Launch</p>",$row[3]);
   $row[3] =  str_ireplace('Body',"<p style=\" font-size: 200%;\">Body</p>",$row[3]);
   $row[3] =  str_ireplace('Display',"<p style=\" font-size: 200%;\">Display</p>",$row[3]);
   $row[3] =  str_ireplace('Camera',"<p style=\" font-size: 200%;\">Camera</p>",$row[3]);
   $row[3] =  str_ireplace('Sound',"<p style=\" font-size: 200%;\">Sound</p>",$row[3]);
   $row[3] =  str_ireplace('Comms',"<p style=\" font-size: 200%;\">Comms</p>",$row[3]);
   $row[3] =  str_ireplace('Features',"<p style=\" font-size: 200%;\">Features</p>",$row[3]);
   $row[3] =  str_ireplace('Battery',"<p style=\" font-size: 200%;\">Battery</p>",$row[3]);
   $row[3] =  str_ireplace('Misc',"<p style=\" font-size: 200%;\">Misc</p>",$row[3]);  
   $row[3] =  str_ireplace('Platform',"<p style=\" font-size: 200%;\">Platform</p>",$row[3]);
   $row[3] =  str_ireplace('Memory',"<p style=\" font-size: 200%;\">Memory</p>",$row[3]);
   
   
 echo  ("   <div class=\"description\"><br /> <br /> <br />  <pre>".$row[3]."</pre><br /> </div>");
 }
 ?>
 	</pre>
</div>
</body>
<?php
//include("webpage/includePages/defaultPageFooter.php");
?>

<?php

 // This bit of code tracks the time when a user logged in and 
 // stayed on a page for the ammount of time

if(isset($_SESSION["login"]) && $_SESSION["login"] == 1){

   $_SESSION["inactivityTimer"] = time();


}
 
?>