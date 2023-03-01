<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Send email
  $to = "timo.pantak@gmail.com";
  $subject = "New Contact Form Submission";
  $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo "Thank you for your message!";
  } else {
    echo "Sorry, there was an error sending your message. Please try again later.";
  }
}
?>
