<html>
    <head> 
        <title> menu </title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="menufetch.css">
   
    </head>
    <body class="container">
    <img src="header.jpg" height="25%" width="100%"> 
   
        <h1 align="center"><font size="40" color="black">USER DETAILS</font></h1>
        <div class="row">

<?php
  require_once("db2.php");
  
  $sql="select * from registration";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0)
  {
    while($row=mysqli_fetch_assoc($result))
    {?><br><br>
        <table align="center"  cellspacing =0  border="1" width=400>
        <tr>
            <td> ID:</td><td align="center" bgcolor=""  ><font size=3 color="black" > <b> <?php echo $row['id'];?> </b></font></td>
             </tr> 
            
        <tr>
            <td> NAME:</td><td align="center" bgcolor=""  ><font size=3 color="black" > <b> <?php echo $row['name'];?> </b></font></td>
             </tr> 
     
             <tr>
               <td>EMAIL:</td><td align="center" bgcolor=""  ><font size=3 color="black" > <b> <?php echo $row['email'];?> </b></font> </td>
                 </tr> 
                 <tr>
               <td>MOBILE NO.:</td><td align="center" bgcolor=""  ><font size=3 color="black" > <b> <?php echo $row['mobile'];?> </b></font> </td>
                 </tr> 
                 <tr>
                    <td>ADDRESS:</td><td align="CENTER"><font size=3 color="black" ><b> <?php echo $row['address']; ?>  </font></b></td>
                     </tr> 

                     
                     </table> 
                     
       </form>
    </div>
<?php
    }
  }
?>
</div>
<body>
</html>