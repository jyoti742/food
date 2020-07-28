<?php
   
   require_once("db2.php");
$a=$_POST['menuid'];
$b=$_POST['amount'];
$c=$_POST['quantity'];
$d=$_POST['address'];
$e=$_POST['phnno'];
$f=$_POST['nm'];
$sql= " INSERT INTO onlineorders (name,address,mobile,amount, menuid) VALUES ('$f','$d',$e,$b,$a)";
     if(mysqli_query($conn,$sql))
     {
      
     
      ?>
      <!DOCTYPE html>
      <html lang="en">
      <head>
      <link href="logo.png" rel="icon" type="image/ico">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
          <style>
              body
              {
                  margin-top:50px;
                  font-family: Calibri;
                  font-size:15px;
                  line-height:2;
                  background-image:url("bgnd.jpg");
                  background-size:cover;
                  background-repeat:no-repeat;
      
              }
              </style>
      </head>
      <body>
      <h1 align=center><font color=white size=5 >ORDER PLACED!!!</font></h1>
      <h2 align=center><font color=white size=5>order details</font></h2>
          <form action="cancelorder.php" method="post">
              <table align="center">
      <tr>
      <tr><td><font color="white" size="5">
      item no:</font></td><td> <input  size="30" type="text" name="menuid" value="<?php echo $a; ?>" ></td> </tr>
      
      
      <tr>
      <tr><td><font color="white" size="5">
      quantity:</font></td><td> <input  size="30" type="text" name="quantity" value="<?php echo $c; ?>" disabled></td> </tr>
      <tr>
      <tr><td><font color="white" size="5">
      name:</font></td><td> <input  size="30" type="text" name="name" value="<?php echo $f; ?>" ></td> </tr>
      <tr>
      <tr><td><font color="white" size="5">
      address:</font></td><td> <input  size="30" type="text" name="address" value="<?php echo $d; ?>" disabled></td> </tr>
      <tr><td><font color="white" size="5">
      phone number:</font></td><td> <input  size="30" type="text" name="phoneno" value="<?php echo $e; ?>" ></td> </tr>
      
      
      <tr><td><font color="white" size="5">
      total amount</font></td><td> <input  size="30" type="text" name="amount" value= "&#8377; <?php echo $b; ?>" disabled></td> </tr>
      
      
      <tr>
      <td colspan="2" align="center"><button formaction="cancelorder.php" type="submit">CANCEL ORDER</button></td>
      
      </tr>
            </table>
            </form>
      </body>
      </html>
      <?php
      }
      else{
         echo "ERROR OCCURED".mysqli_error($conn);
      }
      
      
      
      ?>
      
      
    