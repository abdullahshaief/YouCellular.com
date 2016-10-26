

      <a href="homePage.php"><img class="siteLogo" alt="sitelogo"  src="webpage/Images/largelogo.png" style="float: left; height: 80px; width: 350px"/></a>  
         
         <h1 class="mainSlogan">Your Choice Your Cellular</h1>
    
    
 <!--This is where the login option should be included-->
<div class="navBar">
    <nav >
        <ul class="navPages" >
           <li  ><a id="home" href="homePage.php">Home</a></li>        
           <li ><a id="plans" href="plans.php">Plans</a></li>
           <li > <a id="shop" href="shop.php">Shop</a></li>
 
<!-- This is a process to make a dropdown login form-->

<?php 

if((isset($_SESSION["login"]))&& $_SESSION["login"]== 1){
  
   echo ('<li > <a id="username" href="#" onclick= "account()">'.$_SESSION["user"].'</a>
   <div id ="accountInfo" style="position: absolute; display: none;">
 <form action="signOut.php">
 <input value="Sign out" type="submit" />
 </form>
   </div>
   
   </li>');
   
   echo( "<li><a   href=\"shoppingCart.php\"><img id= \"cart\" src=\"webpage/Images/shopping-cart-md.png\" alt=\"Cart\" style=\"height: 25.2px; width: 40.2px; margin-left: 10px;\"/> </a></li>");
    
}else{
   include("defLogin.php");
  if((isset($_SESSION["misMatch"]))&& $_SESSION["misMatch"]== 1){
    echo ("<script>alert('User or password did not match');</script>");
    $_SESSION["misMatch"]= 0;
  }
}

?>
      
   <!-- This is where the the login ends-->
             
        </ul>
    </nav>
  </div>
    
   
   <div class="content">
   <marquee behavior="scroll" direction="right"><h2 style="   z-index: 0; color:yellowgreen; font-size: 60px; font-family:'French Script MT'; margin-top:2px ">Hello!<?php if(isset($_SESSION["login"]) && isset($_SESSION["user"])){$name = ucfirst($_SESSION["user"]); if($_SESSION["user"]!=""){echo ($name.',');}}?> Welcome to YourCellular.com</h2></marquee> 
   </div> 



      

<!-- Every page has same layout for the navigation and logos. The section below is written for the new pages-->
 
