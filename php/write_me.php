<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "Od: ".$name." < ".$email." >\r\n";

$recipient = "metalmasterboy@gmail.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo'

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Write Me</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/write_me.css" />
    <link rel="shortcut icon" href="../thumbs/logo-round.png" />
</head>
<body>
    <nav class="menu">
        <div class="logo">
            <a href="../index.html" class="fa fa-camera"></a>
            <a id="logo_text" href="../index.html">PK Photography</a>
        </div>
        <div class="links">
            <a href="https://instagram.com/pavel_krucek" target="_blank"><i class="fa fa-instagram"></i></a>
            <a href="https://www.facebook.com/CzechDrummerBoy/" target="_blank"><i class="fa fa-facebook-square"></i></a>
            <a href="html/write_me.html"><i class="fa fa-paper-plane"></i></a>
            <a></a>
        </div>

    </nav>

    <div class="container">
        <h1>
            Thank you for contacting me.Iwill get back to you as
            soon as possible!
        </h1>
        <p class="back">Go back to the <a href="../index.html">homepage</a>.</p>

        <div class="bottom">
            <a class="bottom">© 2022</a>
        </div>
    </div>

    

</body>
</html>

';

?>