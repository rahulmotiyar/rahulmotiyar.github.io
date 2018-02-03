<?php
$to      = 'rahulmotiyar@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: rahulmotiyar@gmail.com' . "\r\n" .
    'Reply-To: rahulmotiyar@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>