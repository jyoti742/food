<html>

<head>
    <title> CONTACT US </title>
    <link rel="stylesheet" href="contact.css">
</head>

<body>
        
    <form action="feedback.php" method="POST">
        <div class="contactus">
            <h1>FEEDBACK</h1>
            <p>Email us with any questions or feedback.<br>We would be happy to answer your question!!</p><br>
            <div class="textbox">
                <input type="text" placeholder="Name" name="name" value="">
            </div>
            <div class="textbox">
                <input type="email" placeholder="Email" name="email" value="">
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