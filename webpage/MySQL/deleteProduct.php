<?php
session_start();
$quantity = $_POST['quantity'];
echo $_GET['id'];
include("databaseConnection.php");

if(isset($_SESSION["usrId"])){
      
     $cartNm = $_SESSION["usrId"]."_cart";
}
if ($quantity > 0){
    $query ="UPDATE yourcellular.$cartNm SET quantity = $quantity WHERE id=".$_GET['id'];
}

else{
    $query ="DELETE FROM $cartNm WHERE id=".$_GET['id'];
}
$result= mysqli_query($connection, $query);

mysqli_close($connection);

header("Location:../../shoppingCart.php");
?>