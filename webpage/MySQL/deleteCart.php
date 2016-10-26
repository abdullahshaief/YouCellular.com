<?php
$uSRID = $_SESSION["usrId"].'_cart';

include("databaseConnection.php");

$query = "DROP table $uSRID ";

$result= mysqli_query($connection, $query);

mysqli_close($connection);
?>