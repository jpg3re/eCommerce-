<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
$mail = new PHPMailer;                              
$mail->IsSMTP();
$mail->SMTPAuth   = true; 
$mail->Host ="smtp.gmail.com";
$mail->Port = 587;  
$mail->Username   = "custombucha@gmail.com"; // SMTP account username
$mail->Password   = "Custombucha19";        // SMTP account password
//$mail->SMTPDebug=4;
//$mail->SMTPSecure='ssl';
 $mail->setFrom($_POST['email'], $_POST['name']);
 $mail->addAddress('custombucha@gmail.com');
 $mail->Subject  = $_POST['subject'];
 $mail->Body     = $_POST['message'];

 if(!$mail->send()) {
    echo 'Message was not sent.';
    echo 'Mailer error: ' . $mail->ErrorInfo;
  } else {
    echo 'Message has been sent.';
    header('Location: contact-success.html');
  }

  
?>