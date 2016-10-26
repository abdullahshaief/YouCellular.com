<?php
    session_start();
include("webpage/PHP/autoLogout.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
     <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="webpage/style/shoppingCart.css">
    <link rel="stylesheet" href="webpage/style/defaultPageStructure.css" type="text/css" />
    <link href="webpage/Images/sitelogo.png" rel="shortcut icon" type="image/png" />
    <script src="webpage/javascript/logoutReload.js"></script>
    <script src="webpage/javascript/loginDropDown.js"></script>
    <title>Shopping Cart</title>
  </head>
  
  <body>
    
    <?php
    include("webpage/includePages/defaultPageHeader.php");
    
    ?>
  
  <?php  
  if (isset($_SESSION["login"]) && $_SESSION["login"] == 1 ){
   
  $total = 0;
  $tax = 0;
  $price = 0;
   $iterate=0;  
	$staticQuantity= false;	
  $stockEmpty = false;
		$uSRID = $_SESSION["usrId"]."_cart";
		
    include("webpage/MySQL/databaseConnection.php");

 // This conncetion and query is to find what user have added to the shopping cart    
 // It takes the model number of the product according to user specific   
  
       $query = "SELECT model,id FROM $uSRID WHERE user_id= ".$_SESSION["sqlId"];
   
       $result = mysqli_query($connection, $query);
       
       //Variable to track 
       
       
       $m = 0;
       $i = 0;
      
       // The purpose of this while loop to track data saved in a user shopping cart according what he chose to buy
	   // and to track the quantity of an item
       while($proModel = mysqli_fetch_row($result)){
      
        $queryMod = "SELECT * FROM products_phone WHERE model=  '{$proModel[$m]}' ";
       
       
       $resultMod = mysqli_query($connection, $queryMod);
       $row = mysqli_fetch_row($resultMod);
       
       if($row){
          $foundSomething = 1;
       }
     
     if( !$row){        // This bit of code is to see if a query is found for phone else looks for Accessories 
               $queryMod = "SELECT * FROM products_accessories WHERE model=  '{$proModel[$m]}' ";
       
       
       $resultMod = mysqli_query($connection, $queryMod);
       $row = mysqli_fetch_row($resultMod);
       
              if( !$row){        // This bit of code is to see if a query is found for phone else looks for Accessories 
               $queryMod = "SELECT * FROM products_plans WHERE model = '{$proModel[$m]}' ";
 
       $resultMod = mysqli_query($connection, $queryMod);
       $row = mysqli_fetch_row($resultMod);
       
        if($row){
          $foundSomething = 1;
       }
     }
        if($row){
          $foundSomething = 1;
       }
     }
	 
	  $array[$iterate] = $row[4]; // This array variable helps to track the number of times an 
	                              // Item has been bought and saves it according how many time
								  // The while loop has been itereted
     if(isset($row[7]) && $row[7] > 0){            
       
       $stockEmpty =true;
	  $_SESSION['CompleteOrder '.$iterate.'']=$row[4]; 
     $iterate ++;
     }                                                 // This session helps to track the number 
	                                                    // of products that has been added to cart to be
													                           // processed to order
      
	   }
	$track =0;
	
  // This for each loop takes the number of time a product has been added to the cart
  // and helps to decrease the redundency of many tables with same item
  $cartNm = $_SESSION["usrId"]."_cart";
  
	foreach(array_count_values($array) as $placedOrder=>$quantity){

	 $queryMod = "SELECT * FROM products_phone WHERE model=  '{$placedOrder}' ";
   $query = "SELECT quantity, id FROM $cartNm WHERE model ='{$placedOrder}' ";
       
       $result = mysqli_query($connection, $query);
       $resultMod = mysqli_query($connection, $queryMod);
       $quantityRow = mysqli_fetch_row($result);
       $row = mysqli_fetch_row($resultMod);
       
      
       if($row){
          $foundSomething = 1;
       }
     
     if( !$row){        // This bit of code is to see if a query is found for phone else looks for Accessories 
               $queryMod = "SELECT * FROM products_accessories WHERE model=  '{$placedOrder}' ";
       
       
       $resultMod = mysqli_query($connection, $queryMod);
       $row = mysqli_fetch_row($resultMod);
      
       if( !$row){        // This bit of code is to see if a query is found for phone else looks for Accessories 
               $queryMod = "SELECT * FROM products_plans WHERE model = '{$placedOrder}'";
               
       $staticQuantity= true;
       $resultMod = mysqli_query($connection, $queryMod);
       $row = mysqli_fetch_row($resultMod);
       
        if($row){
          $foundSomething = 1;
       }
     }
        if($row){
          $foundSomething = 1;
       }
     }
     
     

	   
	   
// When the result is valid or boolean is true the next query takes the model name to find
// a product from the product database
 

 
   // $foundSomething++; // To track if something is found in the cart
    
   echo( '<div style="width: 100%; ">');
      echo( '  <div  style="width: 70%; float: left; overflow:auto;">');

     
echo( '<table style="border: 1px solid black;overflow:auto;">');
 echo( ' <tr>');
  echo( '  <th style="border: 1px solid black;">Shopping Cart</th>');
   echo( '  <th style="border: 1px solid black;">Product details</th>');
    echo( '  <th style="border: 1px solid black;">Quantity</th>');
  echo( '  <th style="border: 1px solid black;">Price</th>');
  echo( '  <th style="border: 1px solid black;  ;">Tax</th>');
  echo( '</tr>');
  echo( '<tr>');
  
        
    echo ( "<td> <img src=\"".$row[1]."\"  style=\"float: left; width: 100px; height: 100px;\"><p><br /><br /><br />
    <br /><br /><br /><br />$row[4]</p></td>");
    
    if(!$row[7] > 0){
    echo("<td style=\"width: 90%;\"><b>Out of Stock!</b></td>");
    }
  else{ 
    echo("<td style=\"width: 90%;\"><pre>$row[6]</pre></td>");
    } 
    $price = $price + $row[5];
    
    // To delete data from shopping cart or to modify quantity in shopping cart
     if($row[7] > 0){
       
    echo ('<form action ="webpage/MySQL/deleteProduct.php?id='.$quantityRow[1].'" method="post">');

  // This bit of code checks for the type of products of which quantity can be increased or not
  // Like plan always has to be 1 not more than that
  
 
 
   if(!$staticQuantity) {
    echo( "<td style=\" border: 1px solid black;\"><input type=\"number\" min=\"0\" max=\"5\"
           name=\"quantity\"value=\"$quantityRow[$i]\" style=\"width: 3em;\" >
           <input type=\"submit\" value=\"&#x2714\"></td>");
      }
      else{ 
     echo( "<td style=\" border: 1px solid black;\"><input type=\"number\" min=\"0\" max=\"1\"
           name=\"quantity\"value=\"1\" style=\"width: 3em;\" > <input type=\"submit\" value=\"&#x2714\"></td>");
           
          }    
    echo('</form>');
   if($staticQuantity) {
  echo( "<td style=\"width: 90%; border: 1px solid black;\"><p> $".($row[5]  )."</p></td>");
 
  $total = $total + $row[5];
     $calTax=(($row[5]*8.875)/100);
  $tax = $tax + $taxC = (number_format((float)$calTax, 2, '.', ''));
 
  $staticQuantity=false;
   }

   else{
    echo( "<td style=\"width: 90%; border: 1px solid black;\"><p> $".(number_format((float)($row[5] * $quantityRow[$i] ), 2, '.', ''))."</p></td>");
  
     $total = $total + ($row[5] * $quantityRow[$i] );
        $calTax=((($row[5] * $quantityRow[$i] )*8.875)/100);
   $tax = $tax + $taxC = (number_format((float)$calTax, 2, '.', ''));
  
   }

 
   
  echo( ' <td style=" width:12% ; border: 1px solid black; padding: 5px 20px 0px 30px;">$'.$taxC.'</td>');
 echo( ' </tr>');
echo( '</table>');
  }

else{
  echo( "<td style=\" border: 1px solid black;\"><input type=\"number\" min=\"0\" max=\"0\"
           name=\"quantity\"value=\"0\" style=\"width: 3em;\" >
           <input type=\"submit\" value=\"&#x2714\"></td>");
           
        $query = "DELETE FROM  $cartNm WHERE model ='$row[4]' ";
       
       $result = mysqli_query($connection, $query);
}


echo( '<hr />');
   echo( ' </div>');
   
    echo( '    </div>');
     
   
    }
    echo( '   <div id="subtotal" style=" position: fixed; top: 300px; right: 0;">');
    
     
    
     echo( '     <p>Subtotal</p>');
     echo('<p style="float: left;">Item Price</p>');
    echo('<br/>$'.number_format((float)$total, 2, '.', '').'<br/><br/>');
    echo('<p style="float: left;">Item Tax  </p>');
    echo('<br/>$'.$tax);
    echo('<br/><br/><br/><br/><br/>');
    echo('<hr />');
    echo('<p style="float: left;">Total Price  </p>');
     $total = $total+$tax;
    echo('<br/>$'.$total);
    echo('<br/><br/><br/><br/>');
    ?>
    <a style="float: left;" href="#" <?php if ($iterate > 0){echo('onclick="myFunction()"');} 
                                      else {echo('onclick="pageReload()"');}
                                      ?>                                                    <?php
                                                                                                   $_SESSION["ItemBought"]=$iterate;
                                                                                                 ?>>Procced Order  </a>
    

<script>
function myFunction() {
    window.open("webpage/MySQL/orderProcess.php", "_blank", "toolbar=no,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");
    setTimeout(function(){ location.reload(); }, 1000);
}

function pageReload(){
  location.reload();
}
</script>
    <?php
    echo('<br/>');
    echo( '    </div>');
   
   if($foundSomething == 0) {
    
   header("Location:homePage.php");
     $_SESSION["cartEmpty"]= 1 ;
   }
    
echo( '</div>');
 
}
else{
  
 header("Location:homePage.php");
}

    ?>


<?php

 // This bit of code tracks the time when a user logged in and 
 // stayed on a page for the ammount of time

if(isset($_SESSION["login"]) && $_SESSION["login"] == 1){

   $_SESSION["inactivityTimer"] = time();


}
 
?>


</body>
</html>
