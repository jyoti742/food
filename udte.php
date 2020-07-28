<?php
require_once("db2.php");
$a=$_POST['id'];
$b=$_POST['name'];
$c=$_POST['usrname'];
$d=$_POST['email'];
$e=$_POST['phone'];
$f=$_POST['addr'];
$sql="update registration SET name='$b', username='$c', email='$d' ,mobile='$e',address='$f'where id=$a"; 
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
        <style>
           
            body
            {
                font-family: Calibri;
                font-size:20;
                line-height:2;
                background-image:url("bgnd.jpg");
                background-size:cover;
                background-repeat:no-repeat;
    
            }
            textarea
            {
                resize:none;
            }
            h1
            {
                margin-top:150px;
    
            }
        
        </style>
    
        
               </head>

    <body>
   
   
   <h1 align="center"><font size="40" color="white">Details Updated!!</font></h1>
   </body>
   </html>
   <?php

}
?>
    