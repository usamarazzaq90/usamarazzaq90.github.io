<?php
// Fetch form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Email information
$to = 'portfolio@iamusama.online'; // Replace with your email address
$subject = "$subject";
$headers = "From: $name <$email>" . "\r\n";

// Compose the email body
$email_body = "Name: $name\n";
$email_body .= "Email: $email\n";
$email_body .= "Subject: $subject\n";
$email_body .= "Message:\n$message\n";

// Send the email
$mail_success = mail($to, $subject, $email_body, $headers);

// Check if the email was sent successfully
//if ($mail_success) {
    // Email sent successfully
  //  header("Location: thank-you.html"); // Replace with the thank-you page URL
//} else {
    // Error sending email
  //  header("Location: error.html"); // Replace with the error page URL
//}
//?>
