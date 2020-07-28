<?php

error_reporting(0);
require_once("db2.php");

$email=$_POST['email'];
$password=$_POST['password'];


if($email=='admin@gmail.com'&& $password=='12345')
{
   
    header("LOCATION:admin.php");
}
else {
    
$sql="select * from registration where email='$email' and password='$password'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==1)
 {
    session_start();
     $_SESSION['email']=$email;
     header("LOCATION:m.php");
 }
 else
 {
    ?>

    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>feedback</title>
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
    
    
        <h1 align=center><font color="white">INCORRECT USERNAME OR PASSWORD!!! </font></h1>
    
    </body>
    </html>
    <?php
       
 }
}
?>