<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_form = 'gaourangainstitute.com';

$email_subject = 'New Form Submission';

$email_body = "User Nmae: $name .\n". 
               "User Email: $visitor_email.\n". 
               "Subject: $subject.\n". 
               "User Message: $message.\n";

$to = 'daurangainstitue@gamil.com';

$headers = "From : $email_from \r\n";

$headers ="Reply-to : $visiter_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>