<html>
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
    <img src="header.jpg" height="25%" width="100%"> 
   
        <h1 align="center"><font size="40" color="black">UPDATE MENU</font></h1>
        <table width=50%>
    
<tr>
    <th align="center">ITEM ID.</th>
    <th align="center">NAME</th>
    <th align="center">IMAGE</th>
    <th align="center">PRICE(₹)</th>
    <th align="center">DISCOUNT</th>
    <th align="center">ACTION</th>
</tr>

 <?php
 require_once("db2.php");
 $sql= "select * from menu";
 $result=mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result))
                 {
                    ?>
                    <form action="updatemenudetails.php" method="post">
                    
<tr>
 <td ><input type="text" name="id" value="<?php echo $row['id']?>"></td>
 <td><input type="text"  name="nm" value="<?php echo $row['name']?>"></td>
 <td><input type="text" name="img" value="<?php echo $row['image']?>"></td>
 <td><input type="text"  name="price" value="<?php echo $row['price']?>"></td>
 <td><input type="text" name="disc" value="<?php echo $row['discount']?>"></td>
 <td><button type="submit" formaction="updatemenudetails.php">update</button></td>
</tr>
</form>
                 <?php
                 }

        }
 
?>
 
                 </table>
</body>
</html>