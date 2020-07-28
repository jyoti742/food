<?php
require_once("db2.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forget Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body
        {
            margin-top:200px;
            font-family: Calibri;
            font-size:100;
            line-height:2;
            background-image:url("bgnd.jpg");
            background-size:cover;
            background-repeat:no-repeat;

        }
        </style>
    
</head>
<body text="white">

    <div class="container">
       <div class="row justify-content-center">
            <div class="col-md-6 col-md-offset-3"align="center">
               <img src="fgt1.png"height="160px"width="150px"><br/><br/>
               <form action="resetpass.php" method="post">
    
    <input type="text"name="email"placeholder="Enter your email" size="50"><br/><br/>
    <input type="submit" value="RESET PASSWORD" name="done">&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="submit" formaction="home.php">BACK</button>
</form>
               </div>
               
        </div>
    </div>
    
    
</body>
</html>