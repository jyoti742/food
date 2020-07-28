<?php
$servername="localhost:3307";
$username="root";
$password="";
$db="food";
$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn)
{
     die("connection not established" .mysqli_connect_error());
}
else 
{
     
}

?>