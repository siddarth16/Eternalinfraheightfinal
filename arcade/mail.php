<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Email: $email \n Message: $message";
$recipient = "connect@eternalinfraheight.in";
$subject = "Contact Form Response";
$mailheader = "From: $recipient \r\n";
mail($recipient, $subject, $formcontent, $mailheader);
echo "Thank You!" . " -" . "<a href='contact.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>