<?php
session_start();
require_once("db2.php");

if(isset($_POST['id']) && isset($_SESSION['addtocart']))
{
  foreach($_SESSION['addtocart'] as $keys => $values)  
  {
      if($values['id'] == $_POST['id'])
      {
          unset($_SESSION['addtocart'][$keys]);
          echo "<script>alert(Item Removed)</script>";
          header("LOCATION:viewcart.php");
      }
  }

}
else if(isset($_POST['id']))
{ 
  $id=$_POST['id'];
  $email=$_POST['email'];
  $quantity=$_POST['quantity'];
  $sno=$_POST['sno'];
 $sql="delete from cart where itemid=$id and email='$email' and quantity='$quantity' and sno='$sno'";
       //echo $sql;
      if(mysqli_query($conn,$sql))
      {
        header("LOCATION:viewcart.php");
      }
  
      else{
          
         echo "error".mysqli_error($conn);
      }
  }
?>


