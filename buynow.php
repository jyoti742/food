<?php
session_start();
require_once('db2.php');
$a=$_POST['menuid'];
$b=$_POST['quantity'];
$price=$_POST['price'];
?>
<html>
    <head> 
        <title> buynow </title>
        
        <link rel="stylesheet" href="buynow.css">
    </head>
    <body>  
        <h1 align="center">Enter Your Email Id</h1>
        <form action="buynow1.php" method="POST">
        <input type="hidden" name="menuid" value="<?php echo $a;?>">
        <input type="hidden" name="quantity" value="<?php echo $b;?>">
        <input type="hidden" name="price" value="<?php echo $price;?>">
            <table align="center">
        <tr><td><input type="email" placeholder="enter email" name="email" value="  
        <?php
        if(isset($_SESSION['email']))
        {
        echo $_SESSION['email'];}
        ?>"></td></tr>






        <tr><td align="center"><input  type="submit" name="" value="submit"></td></tr>
             </table>
        </form>
        </body>
</html>



 

