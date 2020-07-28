<?php
  error_reporting(0);
  require_once("db2.php");
  if(!empty($_POST['nm']) && !empty($_POST['img']) && !empty($_POST['price']) &&!empty($_POST['disc']))
  {   
    $id=$_POST['id'];
      $name=$_POST['nm'];
      $image=$_POST['img'];
      $price=$_POST['price'];
      $discount=$_POST['disc'];
  
      $sql="delete from menu where id=$id";
       echo $sql;
      if(mysqli_query($conn,$sql))
      {
        header("REFRESH:2","LOCATION:deletemenu.php");
      }
  
      else{
          
         echo "error".mysqli_error($conn);
      }
  }
?>