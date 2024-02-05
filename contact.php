<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "arch.jovial@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $message = "Name: " . $_POST["fullName"] . "\n";
    $message .= "Email: " . $_POST["email"] . "\n";
    $message .= "Message: " . $_POST["message"];

    // Additional headers
    $headers = "From: " . $_POST["email"];

    // Send email
    mail($to, $subject, $message, $headers);
}
?>
