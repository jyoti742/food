

<html>

<head>
    <title> login </title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
</head>

<body>
    

    <form action="login.php" method="POST">
        <h1>login</h1>
        <div class="textbox">
            <input type="text" placeholder="email" name="email" value="">
        </div>
        <div class="textbox">
            <input type="password" placeholder="password" name="password" value="">
        </div>
        <div class="textbox">
            <input type="submit" value="SIGIN">

            </br>
            <br>
            <button class="btn btn-outline-primary btn-sm" type="submit" formaction="forgetpassword.php"> forget password</button>
            <br>
            <br>
            <button class="btn btn-outline-primary btn-sm" type="submit" formaction="register.html">New user?</button>
            <br>

        </div>
    </form>
</body>

</html>