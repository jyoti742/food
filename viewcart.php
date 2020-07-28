<?php
session_start();
require_once("db2.php");
?>
<html>
    <head> 
        <title> view cart</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
<style>
    #btn{
    text-align:center;
    float:right;
    top:10%;
   
}
.btn-about{
    color:white;
    border-color:white;
    font-weight:500;
    border-width:2px;
}
#image{
    background-image:url("header.jpg");
    background-position:center;
    background-repeat:no-repeat;
    background-size:cover;
    height:30%;
}
</style>
   
    </head>
    <body>
    <div id="image">
    <!--<img src="header.jpg" height="25%" width="100%"> -->
    <div id="btn">
        <a class="btn btn-outline-primary btn-about" href="home.php" role="button" title="home">Home</a>

    </div>  
</div>

   
        <h1 align="center"><font size="40" color="black">YOUR CART PRODUCTS</font></h1>
<br>


        <table width="60%" border=2 align="center">
            <th align="center">Item Id</th>
            <th align="center">Item Name</th>
            <th align="center">Price</th>
            <th align="center">Quantity</th>
            <th align="center">Action</th>
            <th align="center">Order Now</th>
    <?php


     if(!empty($_SESSION['addtocart']))
    {
        $total=0;
        foreach($_SESSION['addtocart'] as $keys => $values)

        {   ?>
        <form action="cartorder.php" method="post">
        <input type="hidden" name="id" value="<?php echo $values['id'];?>">
        <input type="hidden" name="quantity" value="<?php echo $values['quantity'];?>">
        <input type="hidden" name="price" value="<?php echo $values['price'];?>">
        <input type="hidden" name="name" value="<?php echo $values['name'];?>">
       
            
            
           <?php 
            echo "<tr>";
            echo "<td>".$values['id']."</td>"; 
            echo "<td>".$values['name']."</td>"; 
            echo "<td>".$values['price']."</td>"; 
            echo "<td>".$values['quantity']."</td>"; 
            echo "<td><button type=submit formaction=deleteitem.php>remove me</button></td>";
            echo "<td><button type=submit formaction=cartorder.php>Order Now</button></td>";
            echo"</tr>";


            $total=$total + ($values["quantity"] * $values["price"]);

            

            echo"</form>";

        }

        echo "<tr>";
        echo "<td colspan=6 align=right>Total Amount =".$total."</td>";
        echo"</tr>";
       
        echo"</table>";
      
    }
    else
    {   if(!empty($_SESSION['email']))
      {
        $email=$_SESSION['email'];
        $sql="select * from cart where email='$email'";
        $result=mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($result)>0)
         {   $total=0;
            while($row=mysqli_fetch_assoc($result)) 
            {
            ?>
            <form action="cartorder.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['itemid'];?>">
        <input type="hidden" name="quantity" value="<?php echo $row['quantity'];?>">
        <input type="hidden" name="price" value="<?php echo $row['amount'];?>">
        <input type="hidden" name="name" value="<?php echo $row['name'];?>">
        <input type="hidden" name="email" value="<?php echo $email;?>">
        <input type="hidden" name="sno" value="<?php echo $row['sno'];?>">
            
                
                
            <?php 
                echo "<tr>";
                echo "<td>".$row['itemid']."</td>"; 
                echo "<td>".$row['itemname']."</td>"; 
                echo "<td>".$row['amount']."</td>"; 
                echo "<td>".$row['quantity']."</td>"; 
                echo "<td><button type=submit formaction=deleteitem.php>remove me</button></td>";
                echo "<td><button type=submit formaction=cartorder.php>Order Now</button></td>";
                echo"</tr>";
    
    
                $total=$total + ($row["quantity"] * $row["amount"]);
    
                
    
                echo"</form>";
            




            }


            echo "<tr>";
        echo "<td colspan=6 align=right>Total Amount =".$total."</td>";
        echo"</tr>";
       
        echo"</table>";
       
    }
 }
}
?>


</body>

</html>
