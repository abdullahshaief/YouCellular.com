<?php
session_start();
echo ('<button onclick="myFunction()">Print this page</button>');

echo ('<script>');
echo ('function myFunction() {');
echo (   ' window.print();');
echo ('}');
echo ('</script>');

include("databaseConnection.php");

if(isset($_SESSION["sqlId"])){
    
    $sqlId = (int) $_SESSION["sqlId"];
    $uSRID = $_SESSION["usrId"].'_cart';
 
// This query is to find the person placed the order and then find the first name and the last name 
$query = "SELECT first_name, last_name FROM users WHERE id = $sqlId ";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_row($result);

//  This is to print the orders have been placed by a user
$query = "SELECT user_id, model FROM $uSRID";
$result = mysqli_query($connection, $query);
$orderRow = mysqli_fetch_row($result);


?>
  <!DOCTYPE html>
  <html style="margin:100px 100px 100px 100px;">
      <head>
          <title>Order Confirmation</title>
      </head>
      <body>
          <h2>Thanks for placing your order,<?php echo ' '.$row[0].' '.$row[1]?></h2>
          <p>Your order details are following</p>
  <?php
}
   ?>
   <div style="width: 60%;  margin: auto; ">
   <table   style="border-bottom-style: dotted;">
       <tr >
           <th style="width: 22%; float:left; ">Order details</th>
           <th style=" width: 10%;">Quantity</th>
           <th style="width: 20%;">Item subtotal</th>
       </tr>
    </table>   
   <div style="width: 60%;"> 
    <?php 
    
    // To track the quantity of the products a customer ordered
    
   $total = 0;
    
 for($i=0;$i<$_SESSION["ItemBought"];$i++){
   
    $placedOrder =$_SESSION['CompleteOrder '.$i.''];
    $array[$i] = $placedOrder;
 }
 
 foreach(array_count_values($array) as $placedOrder=>$quantity){
    
// This query is to print the product details  a user placed
$query = "SELECT image_dir, make, model, price, stock FROM products_phone WHERE model = '$placedOrder'";
$result = mysqli_query($connection, $query);
$orderDetailrow = mysqli_fetch_row($result);
$update= 'products_phone';
$stock = $orderDetailrow[4];

if(!$orderDetailrow){
    $query = "SELECT image_dir, make, model, price, stock FROM products_accessories WHERE model = '$placedOrder'";
    $result = mysqli_query($connection, $query);
    $orderDetailrow = mysqli_fetch_row($result);
    $update= 'products_accessories';
    $stock = $orderDetailrow[4];
    
    if(!$orderDetailrow){
    $query = "SELECT image_dir, make , model, price_ FROM products_plans WHERE model = '$placedOrder'";
    $result = mysqli_query($connection, $query);
    $orderDetailrow = mysqli_fetch_row($result);
    
}
}

$query = "SELECT quantity FROM $uSRID WHERE model = '$placedOrder'";
  $result = mysqli_query($connection, $query);
  $quan = mysqli_fetch_row($result);
  $stock = ($stock - $quan[0]);
    ?>
    
    <table  >    
       <tr>
           <td style="width: 21%; overflow:auto; "><img  width="100" height="100" src="<?php echo '../../'.$orderDetailrow[0]; ?>"></td>

           <td style=" width: 55.3%; overflow:auto;"><?php echo $orderDetailrow[1]; ?><br/><p style="overflow:auto;  width: 320px;"><?php echo $orderDetailrow[2]; ?></p></td>
           
           <td style="width: 18%; overflow:auto;"><?php  echo $quan[0]; ?></td>
          
           <td >$<?php  $total = $total + ($orderDetailrow[3] * $quan[0]);
           echo ($orderDetailrow[3] * $quan[0]) ; ?></td>
       </tr>
   </table>
   <div>
  <hr style="width: 63%; float: left;" />
  
  <?php
  
  $query = "UPDATE `yourcellular`.`$update` SET `stock` = $stock WHERE  model = '$placedOrder'";
  $result = mysqli_query($connection, $query);
  }
  ?>
  <br/>
   <hr/>
   </div>
   <table style="float:right;">
       <tr >
           <td><pre>Subtotal=      </pre></td>
           <td> $<?php $calTax=(($total*8.875)/100); echo (number_format((float)$total, 2, '.', ''));?></td>
       </tr>
        <tr >
           <td><pre>Tax=      </pre></td>
           <td> $<?php echo (number_format((float)$calTax, 2, '.', ''));$total= $total+$calTax;?><br/><hr/></td>
       </tr>
        <tr >
           <td><pre>Total=    </pre></td>
           <td> $<?php echo (number_format((float)$total, 2, '.', '')); ?></td>
       </tr>       
   </table>
      </body>
      <?php
      require_once("deleteCart.php");
      ?>
  </html>
