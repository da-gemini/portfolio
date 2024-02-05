<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'arch.jovial@gmail.com'; // Replace with your email address
    $subject = 'New Form Submission';
    $headers = "From: $fullName <$email>";

    mail($to, $subject, $message, $headers);
}
?>
