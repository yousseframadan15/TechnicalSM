<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['Number'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "Sayed-Marey@Technical.com"; // Replace with your email address
    $subject = "New form submission";
    $txt = "name: " . $name . "\r\n" .
        "email: " . $email . "\r\n" .
        "Number: " . $number . "\r\n" .
        "subject: " . $subject . "\r\n" .
        "message: " . $message;

    $headers = "From: " . $name;

    mail($to, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
       
}
?>
