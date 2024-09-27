<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $comment = htmlspecialchars($_POST['comment']);

    $to = 'arbazansary786@gmail.com'; // Replace with your email address
    $subject = 'New Contact Form Submission';
    $message = "Name: $name\nEmail: $email\n\nMessage:\n$comment";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message sending failed.";
    }
}
?>
