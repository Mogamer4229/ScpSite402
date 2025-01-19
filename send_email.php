<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "orchardmyles12@gmail.com"; // Your email address
    $subject = "New Enlistment from " . $name;
    $body = "Name: " . $name . "\nEmail: " . $email . "\n\nMessage:\n" . $message;

    $headers = "From: " . $email;

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for enlisting! We will get back to you soon.";
    } else {
        echo "There was a problem sending your enlistment. Please try again.";
    }
}
?>
