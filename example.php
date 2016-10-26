<?php

// Abdullah Al Shaief
// SQL Comparison


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "emortality";
$dbname = "classicmodels";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Test if the connection worked
if(mysqli_connect_errno()){
    die("Connection to the database failed!: ".
    mysqli_connect_error()." (".mysqli_connect_errno().")"
    );
}


 $query = "SELECT customerName FROM customers WHERE state = 'CA'";

 $result = mysqli_query($connection,$query);

while($row = mysqli_fetch_row($result)){
    
    echo $row[0].'<br/>';
}

  echo '<hr/>';

 $query = "SELECT customerName FROM customers WHERE state != 'CA'";

 $result = mysqli_query($connection,$query);

while($row = mysqli_fetch_row($result)){
    
    echo $row[0].'<br/>';
}
echo '<hr/>';

 $query = "SELECT customerName FROM customers WHERE customerNumber <> 105 ";

 $result = mysqli_query($connection,$query);

while($row = mysqli_fetch_row($result)){
    
    echo $row[0].'<br/>';
}

echo '<hr/>';

 $query = "SELECT customerName FROM customers WHERE customerNumber > 105 ";

 $result = mysqli_query($connection,$query);

while($row = mysqli_fetch_row($result)){
    
    echo $row[0].'<br/>';
}

echo '<hr/>';


 $query = "SELECT customerName FROM customers WHERE customerNumber < 105 ";

 $result = mysqli_query($connection,$query);

while($row = mysqli_fetch_row($result)){
    
    echo $row[0].'<br/>';
}

echo '<hr/>';


 $query = "SELECT customerName FROM customers WHERE customerNumber <= 105 ";

 $result = mysqli_query($connection,$query);

while($row = mysqli_fetch_row($result)){
    
    echo $row[0].'<br/>';
}

echo '<hr/>';

 $query = "SELECT customerName FROM customers WHERE customerNumber >= 105 ";

 $result = mysqli_query($connection,$query);

while($row = mysqli_fetch_row($result)){
    
    echo $row[0].'<br/>';
}

echo '<hr/>';

 $query = "SELECT customerName FROM customers WHERE customerNumber != 105 ";

 $result = mysqli_query($connection,$query);

while($row = mysqli_fetch_row($result)){
    
    echo $row[0].'<br/>';
}

echo '<hr/>';

 $query = "SELECT customerName FROM customers WHERE GREATEST(103,106,19,204) ";

 $result = mysqli_query($connection,$query);

while($row = mysqli_fetch_row($result)){
    
    echo $row[0].'<br/>';
}

echo '<hr/>';


 $query = "SELECT customerName FROM customers WHERE state LIKE '%CA'";

 $result = mysqli_query($connection,$query);

while($row = mysqli_fetch_row($result)){
    
    echo $row[0].'<br/>';
}
echo '<hr/>';


 $query = "SELECT customerName FROM customers WHERE state LIKE '%A%'";

 $result = mysqli_query($connection,$query);

while($row = mysqli_fetch_row($result)){
    
    echo $row[0].'<br/>';
}
echo '<hr/>';



 $query = "SELECT customerName FROM customers WHERE state IN('CA','NY','MA')";

 $result = mysqli_query($connection,$query);

while($row = mysqli_fetch_row($result)){
    
    echo $row[0].'<br/>';
}
echo '<hr/>';



$query = "SELECT customerName FROM customers WHERE customerNumber BETWEEN 103 AND 116 ";

 $result = mysqli_query($connection,$query);

while($row = mysqli_fetch_row($result)){
    
    echo $row[0].'<br/>';
}

echo '<hr/>';

$query = "SELECT customerName FROM customers WHERE customerNumber IS NOT NULL ";

 $result = mysqli_query($connection,$query);

while($row = mysqli_fetch_row($result)){
    
    echo $row[0].'<br/>';
}

echo '<hr/>';
?>
