<?php
$name =_Post['name'];
$visitor_email = $_POST['EMAIL'];
$message = $_POST['mesage'];

$email_form = 'pgupta41532@gmail.com';
$email_subject = "New Form Submission";
$email_body = "User Name: $.\n".
                 "User Email: $visitor_email.\n". 
                      "User Message: $message.\n";


$to = "pgupta51532@gmail.com";                      

$headers = "Form: $email_form \r\n";

$headers .="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");

?>