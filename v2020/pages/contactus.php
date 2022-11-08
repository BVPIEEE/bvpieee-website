<?php $name = $_POST['name'];
$email = $_POST['email'];
$website = $_POST['url'];
$message = $_POST['comment'];
$formcontent="\n From: $name \n Mail: \n Website: $website \n $email \n Message: $message";
$recipient = "info@bvpieeend.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("Location:http://bvpieeend.com/pages/contactus.html");
?>