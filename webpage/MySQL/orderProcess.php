<?php
  session_start();
  
  include("databaseConnection.php");
  $cartNm = $_SESSION["usrId"]."_cart";
  
  for($i=0;$i<$_SESSION["ItemBought"];$i++){
   
    $model = $_SESSION['CompleteOrder '.$i.''];
    $query ="SELECT quantity FROM  $cartNm WHERE model='$model'";
	echo $model;
	$quantity = mysqli_query($connection, $query);
	$quantity = mysqli_fetch_row($quantity);

    $sqlId = (int) $_SESSION["sqlId"];
	  
	  $insert ="INSERT INTO order_process ( ";
	  $insert = $insert."  user_id, ";
	  $insert = $insert."  visible, ";
	  $insert = $insert."  model, ";
	  $insert = $insert."  quantity ";
	  
	  $insert = $insert."  ) ";
	  $insert = $insert."  VALUES ";
	  $insert = $insert."  ( ";
	  $insert = $insert."  $sqlId , ";
	  $insert = $insert." 1, ";
      $insert = $insert."  '$model', ";
      $insert = $insert."  $quantity[0]  ";
      $insert = $insert."  ) ";
	 
	  $result = mysqli_query($connection, $insert);
	  
 }
 
 $_SESSION["clearCart"] = 1;
 
 mysqli_close($connection);
 header("Location: orderConfirm.php");
?>