<?php
  session_start();

   include("databaseConnection.php");
   
   $firstName = $_POST['FirstName'];
   $lastName = $_POST['LastName'];
   $email = $_POST['Email'];
   $userId =  $_POST['UserId'];
   $pass = $_POST['Password'];
  
   $encPass = 'openUp556';

   $firstName = mysqli_real_escape_string( $connection, $firstName);
   $lastName = mysqli_real_escape_string( $connection, $lastName);  
   $email = mysqli_real_escape_string( $connection, $email);
   $userId = mysqli_real_escape_string( $connection, $userId);
   $pass = mysqli_real_escape_string( $connection, $pass);


   $checkUser = "SELECT user_id, email FROM users 
          WHERE user_id = '$userId'  OR email = '$email'";
   //WHERE user_id = AES_ENCRYPT('$userId', UNHEX(SHA2('{$encPass}',512)))
    //OR email= AES_ENCRYPT('$email', UNHEX(SHA2('{$encPass}',512)))";
    
   $userExistConnect = mysqli_query($connection, $checkUser);
    $userExist = mysqli_fetch_row($userExistConnect);
    
   if((isset($userExist[0])) && ($userExist[0] == $userId)){
  echo ("<script>alert('User already exist');</script>"); 
          $_SESSION["idExist"]=1; // To print alert as redirect and print won't work at the same time
          mysqli_close($connection);     
   header("Location: ../../registrationPage.php");
      
   exit;
   }
   
   else if((isset($userExist[1])) && ($userExist[1] == $email)){
     $_SESSION["emailExist"]=1;
          mysqli_close($connection);
   header("Location: ../../registrationPage.php");
   exit;
   }
   else if((isset($userExist[0]))&&(isset($userExist[1]))&&($userExist[0] == $userId)&&($userExist[1] == $email)){
       
   echo ("<script>alert('User already exist');</script>");  
          mysqli_close($connection);
          
   header("Location: ../../registrationPage.php");
   exit;
       
   }
 
 else{
 $query=  "INSERT INTO users (first_name, last_name, user_id, password, email ) 
         VALUES ('{$firstName}', '{$lastName}', '{$userId}' ,AES_ENCRYPT('{$pass}',
         UNHEX(SHA2('{$encPass}',512))), '{$email}')";

  
   $result= mysqli_query($connection, $query);
   
   if($result){
       echo ("Sucsess");
   }
   else{
       die("Database query failed".mysqli_error($connection));
   }
   mysqli_close($connection);
  header("Location: ../../homePage.php");
   exit;
   }
  
?>