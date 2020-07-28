<?php
  error_reporting(0);
  require_once("db2.php");
  if(!empty($_POST['menuid']) && !empty($_POST['name']) && !empty($_POST['phoneno']) )
  {   
    $phone=$_POST['phoneno'];
      $menuid=$_POST['menuid'];
      $name=$_POST['name'];
  
      $sql="delete from onlineorders where mobile='$phone' and name='$name' and menuid='$menuid'";
      if(mysqli_query($conn,$sql))
      { ?><html>
        <head> 
            <title> menu </title>
            <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="menufetch.css">
       
        </head>
        <body >
        <img src="header.jpg" height="25%" width="100%"> <br><br>
        <h1 align="center"><font color="black"> ORDER CANCELLED!!</font></h1>
        <?php
      }
  
      else{
          
         echo "error".mysqli_error($conn);
      }
  }
?>