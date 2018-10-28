<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->setFrom($_POST['email'], $_POST['name']);
$mail->addAddress('custombucha@gmail.com');
$mail->Subject  = $_POST['subject'];
$mail->Body     = $_POST['message'];
if(!$mail->send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
  header('Location: contact.html');
} else {
  echo 'Message has been sent.';
  header('Location: success.html');
}