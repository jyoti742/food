 <html>
    <head> 
        <title> menu </title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="logo.png" rel="icon" type="image/ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="css/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="menufetch.css">
  
    </head>
    <body >
      <!-- header-->
      <header>

      <div id="header">

<ul>
<img src="logo.png" alt="logo">

  <li><a href="home.php">HOME</a></li>

  <li><a href="m.php"target="blank">MENU</a></li>
  <li><a href="">CATEGORY</a>
  <ul>
         <li><a href="veg.php"target="blank">VEG</a></li>
         <li><a href="nonveg.php"target="blank">NON-VEG</a></li>
          <li><a href="chinese.php"target="blank">CHINESE</a></li>
          <li><a href="italian.php"target="blank">ITALIAN</a></li>
          <li><a href="junk.php"target="blank">JUNK FOOD</a></li>
          <li><a href="salad.php"target="blank">SALAD</a></li>
  </ul>
</li>
  


  <li><a href="contact.php" target="blank">FEEDBACK</a></li>

<li><a href="aboutus.html" target= "blank">ABOUT US</a></li>
<li><a href="login.html" target="blank">SIGN IN</a></li>
<li><a href="viewcart.php" target= "blank">MY CART</a></li>
<li><i class="fa fa-cog fa-lg setting" aria-hidden="true" > </i>
<ul>
         <li><a href="profile.php" target="blank">update profile?</a></li>
         <li><a href="logout.php"target="blank">Logout</a></li>
</ul>
</li>

</ul>
</div>




  
  </header>


  <!-- main body-->
  <div class="container">
    
    <img src="header.jpg" height="25%" width="100%"> 
   
        <h1 align="center"><font size="40" color="black">MENU</font></h1>
        <div class="row">

<?php
  require_once("db2.php");
  
  
  $sql="select * from menu";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0)
  {
    while($row=mysqli_fetch_assoc($result))
    {?>
    <div class="col-lg-3">
        <form action="" method="post">
        <table  cellspacing ="10" bgcolor="">
                 
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
                         <td align="center" ><input type="text"  name="quantity" placeholder=" Enter Quantity" ></td>
                     </tr> 
                     <br>
                     <tr>
                      
                     <td align="center">
                     <button type="submit" formaction="buynow.php">ORDER NOW</button> 
    
                     <button type="submit" name="MyCart" formaction="addtocart.php">ADD TO CART</button> 
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
</div>
<body>
</html>