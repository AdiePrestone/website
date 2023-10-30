<?php
if (isset($_POST['sendersend'])){
    $name = $_POST["sendername"];
    $email = $_POST["senderemail"];
    $subject = $_POST["sendersubject"];
    $phonenumber = $_POST["senderphonenumber"];
    $message = $_POST["sendermessage"];

    $mailheader = "From: ". $name ."< provided". $phonenumber ."and". $email .">\r\n";

    $recipient = "hello@prestonead.ie";

    if (mail($recipient, $subject, $message, $mailheader)) {
        echo "Email sent successfully";
    } else {
        echo "Error: Email failed to send";
    }

?>