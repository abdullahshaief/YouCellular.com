<?php
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
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<input type="text" name="search" >
<input type="submit" value ="Search">
</form>
<?php

   if(isset($_POST['search'])){
	   
      $query = " SELECT * FROM products WHERE productName LIKE '%".$_POST['search']."%'  ";


   $result = mysqli_query($connection, $query);

  while( $row = mysqli_fetch_row($result)){
  
?>
<table border="1" cellpadding="0" cellspacing ="30" width="1200">

<tbody>
<tr>
	<td align="left" width="200" height="165" bgcolor="#ffffff" valign="top">
<img src="<?php echo $row[2]; ?>"width="180" height="180">
	</td>
	<td align ="right" width="1000" height="165" valign ="top">
	<p align="center"><B> <?php echo $row[1];?></B> <br> 
	
    <?php echo $row[5];?> 	
</p>
	</td>
	<td width="300">
	<h1 align="center"> Buy: <?php echo "$".number_format((float)$row[7], 2, '.', '');?> 
	
<form action="addtocart.php?id=<?php echo $row[0];?> " method="post">	
	<input type="number" name="itemqty" min='1' max='5'/>
	<input type='submit' name='Addcart' value='Add to Cart' /> 
</form>
	</h1>
	</td>
</tr>	
</tbody>
</table>
<?php
 }
 }
?>  


