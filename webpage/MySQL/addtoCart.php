<?php
session_start();
 include("databaseConnection.php");
if(isset($_POST["plan"])){
      
      $query = "SELECT model FROM  products_plans WHERE price_ = ".$_POST["plan"];

      $result = mysqli_query($connection, $query);
      $row = mysqli_fetch_row($result);

      $_SESSION["model"]= $row[0];
    
    }
	  


  if(isset($_SESSION["usrId"])){
      
     $cartNm = $_SESSION["usrId"]."_cart";
  $createTable ="CREATE TABLE $cartNm ( ";
  $createTable = $createTable."  id INT(11) NOT NULL AUTO_INCREMENT, ";
  $createTable = $createTable."  user_id INT(11) NOT NULL, ";
  $createTable = $createTable."  position INT(3) NOT NULL, ";
  $createTable = $createTable."  visible TINYINT(1) NOT NULL, ";
  $createTable = $createTable."  model VARCHAR(200) NOT NULL, ";
  $createTable = $createTable."  quantity INT(255), ";
  $createTable = $createTable."  PRIMARY KEY (id), ";
  $createTable = $createTable."  INDEX (user_id)";
  $createTable = $createTable." )";
  
  
  $result = mysqli_query($connection, $createTable);
    
  } 
  
$query = "SELECT model FROM  $cartNm WHERE model= '{$_SESSION["model"]}'";

$result = mysqli_query($connection, $query);
$row = mysqli_fetch_row($result);

if($row){
    
    $_SESSION["alreadyAdded"]=1;
}
  else{
  if(isset($_SESSION["sqlId"])){
    
    
	  $sqlId = (int) $_SESSION["sqlId"];
	  
	  $insert ="INSERT INTO $cartNm ( ";
	  $insert = $insert."  user_id, ";
	  $insert = $insert."  position, ";
	  $insert = $insert."  visible, ";
	  $insert = $insert."  model, ";
      $insert = $insert."  quantity ";
	  
	  $insert = $insert."  ) ";
	  $insert = $insert."  VALUES ";
	  $insert = $insert."  ( ";
	  $insert = $insert."  $sqlId , ";
	  $insert = $insert." 1, ";
	  $insert = $insert." 1, ";
      $insert = $insert."  '{$_SESSION["model"]}', ";
      $insert = $insert." 1 ";
      $insert = $insert."  ) ";
	  
	  $result = mysqli_query($connection, $insert);
	  
      $_SESSION["smthgAdded"]=1;
	  }
  }	  
mysqli_close($connection);

header("Location:../../shoppingCart.php");  
?>
