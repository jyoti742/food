<?php
require_once("db2.php");
$a=$_POST['id'];
$b=$_POST['name'];
$c=$_POST['usrname'];
$d=$_POST['email'];
$e=$_POST['phone'];
$f=$_POST['address'];
$sql="update registration SET name='$b', username='$c', email='$d' ,mobile='$e',address='$f'where id=$id"; 
if(mysqli_query($conn,$sql))
{
    ?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>update user profile</title>
        
               </head>

    <body>
    <img src="header.jpg" height="25%" width="100%"> 
   
   <h1 align="center"><font size="40" color="black">Details Updated!!</font></h1>
   </body>
   </html>
   <?php

}
?>
    