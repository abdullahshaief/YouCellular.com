<?php
  session_start();
  
   require("databaseConnection.php");
// This is where the post method sends the login informarion

   $usrName = $_POST['userId'];
   $passwrd =$_POST['Password'];
   $encPass = 'openUp556';
   $usrName = mysqli_real_escape_string($connection, $usrName);
   $passwrd = mysqli_real_escape_string($connection, $passwrd);

  // $query = "SELECT password, first_name FROM users where user_id = '$usrName' ";
  $query = "SELECT AES_ENCRYPT('$passwrd', UNHEX(SHA2('{$encPass}',512))),first_name, id FROM users WHERE user_id= '$usrName' ";
   $result = mysqli_query($connection, $query);
  
  
   if(!$result){
   
       die("Database ERROR: ".mysqli_error($connection));
   }

// We need only one variable to store variables that fetched from database
   
 $row = mysqli_fetch_row($result);



 if(($row[0]!=NULL)||($passwrd==$row[0])){
   
    $_SESSION["user"]=$row[1];
    $_SESSION["login"] = 1; 
    $_SESSION["usrId"] = $usrName;
    $_SESSION["sqlId"] = $row[2];
 }
 
 else{
  
 $_SESSION["misMatch"]= 1;

 }
 
 
   mysqli_close($connection);
   
  header("Location: ../../homePage.php");
   exit;
?>
