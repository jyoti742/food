<?php

    require_once("db2.php");
    $sid=$_POST["id"];
    $uname=$_POST["usrname"];
    $e=$_POST["mail"];
    $pswd=$_POST["pwd"];
    $pass=$_POST["cpass"]; 
    
        $sql="Update registration SET password='$pswd',fpassword='$pass' where id='$sid'";
    
        if(mysqli_query($conn,$sql))
        {
            echo "<h1 align=center>Password changed successfully!!!</h1>";
            header("refresh:2;url=forgetpassword.php");
    
        }
    
        else{
           echo "The requested email doesn't exist".mysqli_error($conn);
        }

        
    
    ?>