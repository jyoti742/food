<?php
require_once('db2.php');
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['subject'];
$d=$_POST['message'];
$sql= " INSERT INTO feedback (name,email,subject, message) VALUES ('$a','$b','$c','$d')";
     if(mysqli_query($conn,$sql))
     {
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>feedback</title>
    <style>
       
        body
        {
            font-family: Calibri;
            font-size:20;
            line-height:2;
            background-image:url("bgnd.jpg");
            background-size:cover;
            background-repeat:no-repeat;

        }
        textarea
        {
            resize:none;
        }
        h1
        {
            margin-top:260px;

        }
    
    </style>

    </head>
    <body>


    <h1 align=center><font color="white">THANKS FOR YOUR FEEDBACK!!!</font></h1>

</body>
</html>
<?php
    }
    else{
        echo "error".mysqli_error($conn);;
    }
    ?>