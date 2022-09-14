<?php
$to         = 'localhost.jandy.gulpe9@gmail.com';
$subject    = 'LOCALHOST SUBJECT';
$message    = 'send from localhost';
$headers    = 'From: healthcenter404@gmail.com';
if(mail($to, $subject, $message, $headers))
    echo "Email sent";
else
    echo "Email sending failed";
?>