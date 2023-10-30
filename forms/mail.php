<?php
if (isset($_POST['sendersend'])){
    $name = $_POST["sendername"];
    $email = $_POST["senderemail"];
    $subject = $_POST["sendersubject"];
    $phonenumber = $_POST["senderphonenumber"];
    $message = $_POST["sendermessage"];

    $mailheader = "From: ". $name ."< provided". $phonenumber ."and". $email .">\r\n";

    $recipient = "hello@prestonead.ie";

    // mail($recipient, $subject, $message, $mailheader) 
    // or die("Error!");

    // echo "Your Email has been sent! I will get back to you as soon as possible";

    echo $message;
}

?>