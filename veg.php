<html>
    <head> 
        <title> VEG</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="menufetch.css">
   
    </head>
    <body class="container">
    <img src="header.jpg" height="25%" width="100%"> 
   
        <h1 align="center"><font size="40" color="black">VEGITARIAN </font></h1>
        <div class="row">

<?php
  require_once("db2.php");
  
  $sql="select * from menu where category='veg'";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0)
  {
    while($row=mysqli_fetch_assoc($result))
    {?>
    <div class="col-lg-3">
        <form action="" method="post">
        <table  cellspacing =0  bgcolor="">
                 
        <input type="hidden" name="menuid" value="<?php echo $row['id'];?>">
        <input type="hidden" name="price" value="<?php echo $row['price'];?>">
        <input type="hidden" name="name" value="<?php echo $row['name'];?>">
        <br>
        <tr>
                 <td align="center" bgcolor=""  ><font size=3 color="black" > <b> <?php echo $row['name'];?> </b></font></td>
             </tr> 
     
             <tr>
                     <td> <img  src="<?php echo $row['image'];?>" height="180px" width="250px"> </td>
                 </tr> 
                 <tr>
                         <td align="CENTER"><font size=3 color="black" ><b> &#8377; <?php echo $row['price']; ?> &nbsp; (<?php echo $row['discount'];?>%off) </font></b></td>
                     </tr> 
                     <tr >
                         <td align="center" ><input type="text" name="quantity" placeholder=" Enter Quantity" ></td>
                     </tr> 
     
                     <tr>
                     <td>
                     <button type="submit" formaction="buynow.php">ORDER NOW</button> 
    
                     <button type="submit" formaction="addtocart.php">ADD TO CART</button> 
                     </td>
               </tr>

                     </table> 
                     
       </form>
    </div>
<?php
    }
  }
?>
</div>
<body>
</html>