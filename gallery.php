<html><head><title>gallery</title>
 <link rel="stylesheet" href="css/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link href="logo.png" rel="icon" type="image/ico">
    <link rel="stylesheet" href="css/magnific/magnific.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <style>
    #btn{
    text-align:center;
    float:right;
    top:10%;
   
}
.btn-about{
    color:white;
    border-color:white;
    font-weight:500;
    border-width:2px;
}
#image{
    background-image:url("header.jpg");
    background-position:center;
    background-repeat:no-repeat;
    background-size:cover;
    height:30%;
}
</style>

</head>

<body >
<div id="image">
   
   <div id="btn">
       <a class="btn btn-outline-primary btn-about" href="home.php" role="button" title="home">Home</a>

   </div>  
</div>
<div class="container">
    <div id="gallery">
    <br>
 <br><br>
   
   <h1 align="center"><font size="40" color="black">Gallery</font></h1>
   <br>
   <div class="row">

<?php
  require_once("db2.php");
  
  $sql="select * from menu";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0)
  {
    while($row=mysqli_fetch_assoc($result))
    {?>
    <div class="col-lg-3">
        
        <br>
       
             <tr>
                     <td><a href="<?php echo $row['image'];?>" title="<?php echo $row['name'];?>"> <img  src="<?php echo $row['image'];?>" height="180px" width="250px"></a> </td>
                 </tr> 
                 

        
    </div>
<?php
    }
  }
?>
</div>
</div>
</div>
<body>
</html>



</body>
<script src="js/jquery.min.js"></script>

<script src="js/bootstrap/bootstrap.min.js"></script>
<script src="js/magnific/magnific.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
