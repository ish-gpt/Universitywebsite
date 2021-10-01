<?php
$name = $_POST['name'];
$visitors_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from =  'info@knowledgelelo.org';

$email_subject = 'New Message';
$email_body = "User Name: $name.\n".
                "User Email : $visitors_email.\n".
                "Subject:  $subject.\n".
                "User Message: $message .\n";

$to = 'ishangpt007@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitors_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: Contactform.html");

?>