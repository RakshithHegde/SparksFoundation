<?php 

$server="localhost";
$username="root";
$password="RK1234";
$db="sparks_bank";

$conn= new mysqli($server,$username,$password,$db);

if($conn){
  
}

else
die("connection to this database failed due to " .mysqli_connect_error());


?>