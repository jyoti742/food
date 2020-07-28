<?php
session_start();
require_once("db2.php");


if(isset($_SESSION['email']))
{
    $email=$_SESSION['email'];
    $sql="select * from registration where email='$email'";

    $result=mysqli_query($conn,$sql);
       if(mysqli_num_rows($result)>0)
     {
    $row=mysqli_fetch_assoc($result);


      }

?>

<html>

<head>
    <title> feedback </title>
    <link rel="stylesheet" href="contact.css">
</head>

<body>
    <form action="feedback.php" method="POST">
        <div class="contactus">
            <h1>FEEDBACK</h1>
            <p>Email us with any questions or feedback.<br>We would be happy to answer your question!!</p><br>
            <div class="textbox">
                <input type="text" placeholder="Name" name="name" value="<?php echo $row['name'];?>">
            </div>
            <div class="textbox">
                <input type="email" placeholder="Email" name="email" value="<?php echo $row['email'];?>">
            </div>
            <div class="textbox">
                <input type="text" placeholder="Subject" name="subject" value="">
            </div>
            <div class="textbox">
                <textarea class="textbox message" placeholder="Message..." name="message"></textarea>
            </div>
            <div class="btn">

                <input type="submit" value="SEND MESSAGE">
            </div>
            </br>
        </div>
    </form>
</body>

</html>
<?php
}
else{
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        

        <link rel="stylesheet" href="css/fontawesome/css/font-awesome.min.css">
        <link href="logo.png" rel="icon" type="image/ico">
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
        <title>feedback</title>
        <style>


body{
    background:url("bgnd.jpg");
    background-position:center;
    background-repeat:no-repeat;
    background-size:cover;
    background-attachment:fixed;
     
}
h1{
    padding-top:15%;
}
#btn{
    text-align:center;
    padding-top:30px;
}
.btn-about{
    color:white;
    border-color:white;
    font-weight:400;
    border-width:2px;
}
            </style>
       
     </head>

    <body>
        

  
   <h1 align="center"><font size="40" color="white">You are not Logged In!!</font></h1>
   <div id="btn">
                                <a class="btn btn-outline-primary btn-about" target="blank" href="home.php" role="button" title="home">Home</a>

                            </div>
   </body>
   </html>
   <?php
}
?>