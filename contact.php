<?php

if($_POST["submit"]) {
    $recipient="huberdoggy@gmail.com";
    $subject="Form to email message";
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message: \n$message\n";


    $email_headers = "From: $name <$email>";
    // $sender=$_POST["sender"];
    // $senderEmail=$_POST["senderEmail"];
    // $message=$_POST["message"];

    //$mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $email_content, $email_headers);

    $thankYou=header("Location: https://www.kylejamesmyfilenames.com/?success=1");

}

?><!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Confirmation</title>
</head>

<body>

    <?=$thankYou ?>

    
</body>

</html>