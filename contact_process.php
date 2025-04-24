<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL); // Validate email
    $message = htmlspecialchars(trim($_POST['message']));

    if ($email === false) {
        echo "<script>alert('Invalid email address!'); window.location.href='contact.html';</script>";
        exit();
    }

    $to = "savoryspot05@gmail.com";
    $subject = "New Contact Message from $name";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: noreply@yourdomain.com";  //  To prevent header injection, don't directly use user-supplied email here
    $headers .= "\r\nReply-To: $email";           //  Use Reply-To instead

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Message sent successfully!'); window.location.href='contact.html';</script>";
    } else {
        echo "<script>alert('Failed to send message. Please try again later.'); window.location.href='contact.html';</script>";
    }
} else {
    header("Location: contact.html");
    exit();
}
?>