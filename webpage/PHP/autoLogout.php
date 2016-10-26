<?php 

$timer= time();

        if (isset( $_SESSION["inactivityTimer"])){
       
           $inactivityTimeOut = 60*5;

    if(($timer - $_SESSION["inactivityTimer"] ) >= $inactivityTimeOut){

         $_SESSION["login"] = 0;
         
         echo('<script>alert("Sorry! logged out due to inactivity!");</script>');
          session_unset();
          session_destroy();
     }
    }

?>