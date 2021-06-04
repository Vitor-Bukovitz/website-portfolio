<?php
    $emailTo = "contact@findvitor.dx.am";
    $subject = $_POST["subject"];
    $content = $_POST["content"] . "\nEmail Address: " . $_POST["email"];
    $headers = "From: noreply@findvitor.dx.am";
    mail($emailTo, $subject, $content, $headers)
?>
