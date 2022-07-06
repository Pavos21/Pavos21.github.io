<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "metalmasterboy@gmail.com";
    $headers = "Od: ".$mailFrom;
    $txt = "Dostals e-mail od: ".$name."\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}

?>
