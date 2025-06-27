<?php

    $name = $_POST["name"];
    $from = $_POST["email"];
    $subject = "Message from portfolio page";
    $to = "contact@yubrazdhakal.com.np";
    $message = $_POST["message"];

    $txt = "Name" . $name . "\r\n" . "Email: " . $from . "\r\n" . "\r\n" . "Contents: " . $message;

    $headers = "From: " . $from . "\r\n";
    $headers .= "Reply-To: " . $from . "\r\n";

    $mail_status = mail(
        $to,
        $subject,
        $txt,
        $headers
    );

    if ($mail_status) {
        header("Location: /index.html?mail_status=sent");
    } else {
        header("Location: index.html?mail_status=error");
    }

?>
