<?php
$dbhost = "localhost";
$dbuser = "shaief";
$dbpass = "mortality";
$dbname = "yourcellular";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Test if the connection worked
if(mysqli_connect_errno()){
    die("Connection to the database failed!: ".
    mysqli_connect_error()." (".mysqli_connect_errno().")"
    );
}

?>