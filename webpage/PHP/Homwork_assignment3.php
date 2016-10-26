<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/defaultPageStructure.css" type="text/css" />
    <link href="sitelogo.png" rel="shortcut icon" type="image/png" />
    <title>Your cellular</title>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

   <script>
       $(document).ready(function () {
           $('#login-trigger').click(function () {
               $(this).next('#login-content').slideToggle();
               $(this).toggleClass('active');

               if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
               else $(this).find('span').html('&#x25BC;')
           })
       });

   </script>
</head>

<body>

    
      <a href="pages/homepage.html"><img class="siteLogo" alt="sitelogo"  src="images/largelogo.png" style="float: left; height: 80px; width: 350px"/></a>  
         <h1 class="mainSlogan">Your Choice Your Cellular</h1>
    <div class="navBar">

   <nav >
        <ul class="navPages" >
            <li  ><a id="home" href="homepage.html">Home</a></li>
            
            <li ><a id="plans" href="plans.html">Plans</a></li>
           <li > <a id="shop" href="shop.html">Shop</a></li>
 
 <!-- This is a process to make a dropdown login form-->
             
                   <li id="login">  
      <a id="login-trigger" href="#">
        Log in <span>▼</span>
      </a>
      <div id="login-content">
        <form>
          <fieldset id="inputs">
            <input id="username" type="email" name="Email" placeholder="Your email address" required>   
            <input id="password" type="password" name="Password" placeholder="Password" required>
          </fieldset>
          <fieldset id="actions">
            <input type="submit" id="submit" value="Log in">
            <label><input type="checkbox" checked="checked"> Keep me signed in</label>
          </fieldset>
        </form>
      </div>                     
    </li>
   <!-- This is where the the login ends-->
   
      
               <li><a  href="#"><img  src="Images/shopping-cart-md.png" alt="Cart" style="height: 25.2px; width: 40.2px; margin-left: 10px;"/> </a></li>
        </ul>
    </nav>

    </div>

    
   
    <div class="content">

   <marquee behavior="scroll" direction="right"><h2 style=" position:relative; color:yellowgreen; font-size: 60px; font-family:'French Script MT'; margin-top:2px ">Hello! Welcome to YourCellular.com</h2></marquee> 
  
    </div> 
     <!-- Every page has same layout for the navigation and logos. The section below is written for the new pages-->
 
</body>

<?php
   
?>

</html>
  