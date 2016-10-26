<?php

session_start();


 for($i=0;$i<$_SESSION["ItemBought"];$i++){
    
   $placedOrder =$_SESSION["CompleteOrder $i"].'<br />';
  
  $array[$i] = 	$placedOrder;
  
 }

foreach(array_count_values($array) as $placedOrder=>$value){
      
        echo $placedOrder;
         echo  $value ;
}


?>