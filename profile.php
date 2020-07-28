<?php
session_start();
require_once("db2.php");
if(!$_SESSION['email'])
{
    header("LOCATION:login.html");
    echo "Please login first";
}
else{

    if(isset($_SESSION['email']))
    {
          $m=$_SESSION["email"];
        $sql="select * from registration where email='$m'";
        $result=mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {?>
            <img src="header.jpg" height="25%" width="100%"> 
   
   <h1 align="center"><font size="40" color="black">User's Profile</font></h1>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Profile Page</title>
        
               </head>

    <body>
    
        <form action="udte.php" method="post">
            <table align="center">
            <tr>
        
        
      </tr>
                <tr>
                    <td><b>Name:</b></td>
                    <td><input type="text" name="name" value="<?php echo $row['name'] ?>"></td>
                </tr>
                <tr>
                    <td><b>Userame:</b></td>
                    <td><input type="text" name="usrname" value="<?php echo $row['username']?>"></td>
                </tr>
                <tr>
                    
                <tr>
                    <td><b>Email:</b></td>
                    <td><input type="text" name="email"value="<?php echo $row['email']?>"></td>
                </tr>
                <tr>
                    <td><b>Mobile:</b></td>
                    <td><input type="text" name="phone"value="<?php echo $row['mobile']?>"></td>
                </tr>
                <tr>
                    <td><b>Address:</b></td>
                    <td><textarea rows="6" cols="30" name="addr"><?php echo $row['address'];?></textarea></td>
                </tr><br/>
               
                 <tr>
    
                    <td><input type="submit" value="Update" name="done"></td>&nbsp;
                    
                </tr>
                <tr>
                    <td>
                        <input type="reset" value="reset"> 
                </td>
                </tr>
                <input type="hidden" name=id value="<?php echo $row['id'];?>">
            </table>
    </form>
    
        
    </body>
    </html>
    <?php
    }
        }
    }
    }
    ?>