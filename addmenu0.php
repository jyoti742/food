<html>

<head>
    <title> add menu </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        button {
            margin-left: 20%;
        }
    </style>

</head>

<body>
    <img src="header.jpg" height="25%" width="100%">
    <table align="center" cellspacing="50px" width="500px" height="350px">
        <form action="addmenu.php" method="POST">
            <h1 align="center">ADD TO MENU</h1>
            <tr>

                <td>NAME</td>
                <td> <input type="text" placeholder="Name" name="name" value=""></td>
            </tr>
            <tr>
                <TD>IMAGE</TD>
                <td><input type="text" placeholder="image name" name="img" value=""></td>
            </tr>
            <tr>
                <TD>PRICE</TD>
                <td> <input type="text" placeholder="price" name="price" value=""></td>
            </tr>

            <tr>
                <TD>DISCOUNT</TD>
                <td> <input type="text" placeholder="discount" name="discount" value=""></td>
            </tr>

            <tr>
                <TD>CATEGORY</TD>
                <td> <input type="text" placeholder="category" name="category" value=""></td>
            </tr>
            <div id="button">
                <tr>
                    <td colspan="2">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<button type="submit" formaction="addmenu.php">ADD TO MENU</td>
                </tr>
            </div>
            </br>
            </div>
        </form>
    </table>
</body>

</html>