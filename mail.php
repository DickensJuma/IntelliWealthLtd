<?php 
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Phone: $phone \n Message: $message";
$recipient = "emailaddress@here.com";
$subject = "Intelliwealth.org";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>

