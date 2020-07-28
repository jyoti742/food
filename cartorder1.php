<?php
require_once('db2.php');

$c=$_POST['email'];
$d=$_POST['id'];
$e=$_POST['quantity'];
$f=$_POST['price'];


$sql="select * from registration where email='$c'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
    $row=mysqli_fetch_assoc($result);


?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>cartorder1</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body
        {
            margin-top:50px;
            font-family: Calibri;
            font-size:100;
            line-height:2;
            background-image:url("bgnd.jpg");
            background-size:cover;
            background-repeat:no-repeat;

        }
        </style>
</head>
<body>
    <h1 align="center"><font color="white" > ORDER DETAILS</font></h1>
<table  align="center" border="0" cellpadding="2">
<form method="post">

<tr><td><font color="white" size="5">
Email:</font></td><td> <input size="30" type="email" name="mail" value="<?php echo $row['email']; ?>"></td> </tr>
<tr><td><font color="white" size="5">
Name:</font></td><td> <input  size="30" type="text" name="nm" value="<?php echo $row['name']; ?>"></td> </tr>


<tr><td><font color="white" size="5">Address:</font></td><td> <input type="text"  size="30" name="address" value="<?php echo $row['address']; ?>"> </td> </tr>

<tr><td><font color="white" size="5">
phone number:</font></td><td> <input  size="30" type="text" name="phnno" value="<?php echo $row['mobile']; ?>"></td> </tr>


<tr>
<tr><td><font color="white" size="5">
item no:</font></td><td> <input  size="30" type="text" name="menuid" value="<?php echo $d; ?>"></td> </tr>


<tr>
<tr><td><font color="white" size="5">
quantity:</font></td><td> <input  size="30" type="text" name="quantity" value="<?php echo $e; ?>"></td> </tr>
<tr>
<tr><td><font color="white" size="5">
price:</font></td><td> <input  size="30" type="text" name="price" value="<?php echo $f; ?>"></td> </tr>


<tr>
<tr>
<tr><td><font color="white" size="5">
total amount(&#8377;)</font></td><td> <input  size="30" type="text" name="amount" value="<?php echo ($e*$f); ?>" ></td> </tr>


<tr>
<td colspan="2" align="center"><button formaction="placeorder.php" type="submit">PLACE ORDER</button> </td> 

</tr>




</form>

</table>
</body>
</html>


<?php
}
else {
    echo "register youself".mysqli_error($conn);
}
?>

