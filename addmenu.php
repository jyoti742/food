<?php
  error_reporting(0);
  require_once("db2.php");
  if(!empty($_POST['name']) && !empty($_POST['img']) && !empty($_POST['price']) &&!empty($_POST['discount'])&&!empty($_POST['category']))
  {   
    $name=$_POST['name'];
      $image=$_POST['img'];
      $category=$_POST['category'];
      $price=$_POST['price'];
      $discount=$_POST['discount'];
  
      $sql="insert into menu (name,image,price,discount,category) values ('$name','$image','$price','$discount','$category')";
       echo $sql;
      if(mysqli_query($conn,$sql))
      {
        header("LOCATION:m.php");
  
      }
  
      else{
          
         echo "error".mysqli_error($conn);
      }
  }
?>