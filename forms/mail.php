<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$phonenumber = $_POST['phonenumber'];
$message = $_POST['message'];

$mailheader = "From: ".$name."< provided".$phonenumber."and".$email.">\r\n";

$recipient = "hello@prestonead.ie";

mail($recipient, $subject, $message, $mailheader) 
or die("Error!");

echo'Your Email has been sent! I will get back to you as soon as possible';

?>