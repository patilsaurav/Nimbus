<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Set the recipient email address
    $to = "patilsaurav140@gmail.com";  // Replace with your email address

    // Set the email headers
    $headers = "From: $email";

    // Send email
    $mail_sent = mail($to, $subject, $message, $headers);

    // Send response
    if ($mail_sent) {
        echo "OK";  // Success response
    } else {
        echo "Mail could not be sent!";  // Failure response
    }
}
?>
