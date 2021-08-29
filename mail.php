<?php 
$name = $_POST['name'];
$salon = $_POST['salon'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="This is an email sent automatically from MyBoothRent.com \n 
From: $name 
Salon:$salon
Email:$email 
Phone:$phone
Message: \n
$message
";
$recipient = "info@myboothrent.com";
$subject = "I'm Interested in MyBoothRent!";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) || die("Error, Your message can not be sent at this time.");
header('location: /#contact');
?>