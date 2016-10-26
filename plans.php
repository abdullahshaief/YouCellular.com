<?php
     session_start();
     include("webpage/PHP/autoLogout.php");
?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    
    <link rel="stylesheet" href="webpage/style/defaultPageStructure.css" type="text/css" />
    <link rel="stylesheet" href="webpage/style/plans.css" type="text/css" />
<script src="webpage/javascript/logoutReload.js"></script>
    <link href="webpage/Images/sitelogo.png" rel="shortcut icon" type="image/png" />
    <script src="webpage/javascript/loginDropDown.js"></script>
    <title>Your cellular</title>
  

</head>

<body>

    <?php
           include("webpage/includePages/defaultPageHeader.php");
    ?>
      <!-- Every page has same layout for the navigation and logos. The section below is written for the new pages-->

    <div>
         <img src="webpage/Images/peaceSign.png" / alt="Peace sign" style="position:relative; width: 200px; height: 300px; margin:-50px 100px;">
      <pre>
                          YourCellular got your back 
                               with the most affordable plans.
  </pre> 

    </div>

    <br/><br/><br/><br/>
    
    <table border="0" cellpadding="0" cellspacing="100">
        <th>
            <td >Minutes</td>
            <td >Text</td>
            <td >Data</td>
            <td >Catagory</td>
            <td>Purchase</td>
        </th>
    <?php
      
      include("webpage/MySQL/databaseConnection.php");
      
      $query = "SELECT * FROM products_plans";
      $result = mysqli_query($connection, $query);
     
      while($row = mysqli_fetch_row($result)){
    ?>
    
        <tr>
            <td><a target="_blank" href="<?php echo $row[1]?>">
            <img src="<?php echo $row[1]?>" alt="Individual Plan" /> 
             </a></td>
            <td ><?php echo $row[2]?></td>
            <td ><?php echo $row[3]?></td>
            <td ><?php echo $row[7]?></td>
            <td ><?php echo $row[4]?></td>
   <?php 
   echo ('<form action ="webpage/MySQL/addtoCart.php" method="post">');

    
    echo( "<td style=\" border: 1px solid black;\">$
           <input name=\"plan\" type=\"submit\" value=\"$row[5]\"></td>");
  
    echo('</form>');
     echo(   '</tr>');
  
   
   }
   
   mysqli_close($connection);
   ?>
    </table>

</body>


<div style="margin: 40px 50px 0px 120px; ">
    
<table style="width:80%; position: relative; bottom: 5px; background-color: #D1DBDD;"> 
    <tr> 
   <td style="font-weight: bold;">This a Fictional website!</td>
   <td style="font-weight: bold;">If you have any concern, contact me at</td>
   <td style="font-weight: bold;">Find me on</td>
        
    </tr>
   
     <tr>
   <td><p>Developed by</p>
   <h3>Abdullah Al Shaief</h3></td>
   <td><p>zoyite.pi@gmail.com</p></td>
    <td><img src ="webpage/Images/facebook.png" alt="facebook" width="50px" height="50px"/>
    <img src ="webpage/Images/linkedin.png" alt="linkedin" width="50px" height="50px"/>  </td>     
    </tr>
   
</table>
</div>
</body>
</html>
  
  <?php

 // This bit of code tracks the time when a user logged in and 
 // stayed on a page for the ammount of time

if(isset($_SESSION["login"]) && $_SESSION["login"] == 1){

   $_SESSION["inactivityTimer"] = time();


}
 
?>