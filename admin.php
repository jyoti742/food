<?php


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
                margin-top:150px;
    
            }
            .button{
               width:200px;

            }
            table{
               margin-left:42%;
            }
        
        </style>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
        </head>
        <body>
    
    <br>
        <h1 align=center><font color="white">ADMIN PAGE</font></h1><br>
        <table align="center" cellspacing=20 width=400 height=500>
<form action="" method="post">
<tr><td>
<button class="btn btn-outline-warning btn-lg button" type="submit" formaction="viewuser.php"> VIEW USER</button>
        </td>   </tr>
        <tr><td>
<button class="btn btn-outline-warning btn-lg button" type="submit" formaction="viewfeedback.php"> VIEW FEEDBACK</button>
        </td>   </tr>
        <tr><td>
<button class="btn btn-outline-warning btn-lg button" type="submit" formaction="viewmenu.php"> VIEW MENU</button>
        </td>   </tr>
        <tr><td>
<button class="btn btn-outline-warning btn-lg button" type="submit" formaction="vieworder.php"> VIEW ORDERS</button>
        </td>   </tr>
        <tr><td>
<button class="btn btn-outline-warning btn-lg button" type="submit" formaction="updatemenu.php"> UPDATE MENU</button>
        </td>   </tr>
        <tr><td>
<button class="btn btn-outline-warning btn-lg button" type="submit" formaction="addmenu0.php"> ADD MENU</button>
        </td>   </tr>

        <tr><td>
<button class="btn btn-outline-warning btn-lg button" type="submit" formaction="deletemenu.php"> DELETE MENU</button>
        </td>   </tr>





</form>

        </table>
    
    </body>
    </html>
    <?php
    ?>