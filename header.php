<html><head><title>food ordering</title>
 <link rel="stylesheet" href="css/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link href="logo.png" rel="icon" type="image/ico">
    <link rel="stylesheet" href="css/magnific/magnific.css">
<style>

#menu ul {
    list-style: none;
    position: fixed;
    top: 10px;
}
body,html{
    height:30%;

}

#menu ul li {
    background-color: rgba(0, 0, 0, 0.7);
    width: 148px;
    height: 50px;
    text-align: center;
    line-height: 50px;
    float: left;
    position: relative;
}
* {
    margin: 0px;
    padding: 0px;
}

#menu ul li a {
    text-decoration: none;
    color: white;
    display: block;
}
.setting {
    margin-top: 20px;
    color: white;
    margin-left: 5px;
}

#menu ul li :hover {
    background-color: white;
    color: black;
    font-weight: 500;
}
#menu ul li ul li {
    float: none;
    top: 40px;
}

#menu ul ul {
    position: absolute;
    display: none;
}

#menu ul li:hover>ul {
    display: block;
}

ul img {
    float:left;
    height: 120px;
    width: 130px;

}



</style>


</head>
<body bgcolor="black">
<div class="container-fluid">
<div id="menu">

<ul>
<img src="logo.png" alt="logo">

  <li><a href="home.php">HOME</a></li>

  <li><a href="m.php"target="blank">MENU</a></li>
  <li><a href="">CATEGORY</a>
  <ul>
         <li><a href="veg.php"target="blank">VEG</a></li>
         <li><a href="nonveg.php"target="blank">NON-VEG</a></li>
          <li><a href="chinese.php"target="blank">CHINESE</a></li>
          <li><a href="italian.php"target="blank">ITALIAN</a></li>
          <li><a href="junk.php"target="blank">JUNK FOOD</a></li>
          <li><a href="salad.php"target="blank">SALAD</a></li>
  </ul>
</li>
  


  <li><a href="contact.php" target="blank">FEEDBACK</a></li>

<li><a href="aboutus.html" target= "blank">ABOUT US</a></li>
<li><a href="login.html" target="blank">SIGN IN</a></li>
<li><a href="viewcart.php" target= "blank">MY CART</a></li>
<li><i class="fa fa-cog fa-lg setting" aria-hidden="true" > </i>
<ul>
         <li><a href="profile.php" target="blank">update profile?</a></li>
         <li><a href="logout.php"target="blank">Logout</a></li>
</ul>
</li>

</ul>
</div>
</div>
</body>
</html>