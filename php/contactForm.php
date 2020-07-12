<?php
    $name = $_POST['name'];
    $visitorEmail = $_POST['email'];
    $subject = $_POST['subject']
    $message = $_POST['message'];

    $email_body = "From: $name \n"."Email: $visitorEmail\n"."Message:\n\n $message.";
    
    $to = "bennyk.flames@gmail.com"

    $headers = "From: $visitorEmail \r\n";

    mail($to, $subject, $email_body, $headers)

?>