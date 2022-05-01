<?php


//Plain php mailer

$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = 'sbsteventest@gmail.com';
// From form
$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$subject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

// Note: leave indentation as it is
$message = <<<HTML
$message
HTML;

$headers = "From: $name <$email>\r\n";
$headers .= "Content-type: text/html\r\n";

$mail = mail($to, $subject, $message, $headers);

echo 'Message sent.';



?>
<!--
TODO:
- Toevoegen van een msg wanneer de mail succesvol is verzonden
 -->
