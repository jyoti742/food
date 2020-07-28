<?php
session_start();

error_reporting(0);
  require_once("db2.php");
  if(!empty($_SESSION['addtocart']) && !empty($_SESSION['email']))
  {   
              
          foreach($_SESSION['addtocart'] as $keys => $values)

          {    $a= $values['id'];
                $b =$values['quantity'];
                $c=$values['price'];
                $d=$values['name'];
                $email=$_SESSION['email'];
                $sql1="select * from registration where email='$email'";
            
               $result=mysqli_query($conn,$sql1);
        
                      if(mysqli_num_rows($result)==1)
                     {        
                        $row=mysqli_fetch_assoc($result);
                          
                           
                                  $name=$row['name'];
                                  $mobile= $row['mobile'];
                                $address= $row['address'];
                           
                          }


       $sql="insert into cart (itemid,itemname,quantity,name,address,mobile,amount,email) values 
                         ($a,'$d',$b,'$name','$address','$mobile',$c,'$email')"; 
                         //echo"sql";
                        // if(mysqli_query($conn,$sql))
                         //{
                           //echo "inserted";
                         //}


           }
          
                   
  } 


  
session_unset();
session_destroy();
header("LOCATION:login.html");
?>