<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
$mail = new PHPMailer;                              

    

 $mail->setFrom($_POST['email'], $_POST['name']);
 $mail->addAddress('jpg3re@virginia.edu');
 $mail->Subject  = $_POST['subject'];
 $mail->Body     = $_POST['message'];

 if(!$mail->send()) {
    echo 'Message was not sent.';
    echo 'Mailer error: ' . $mail->ErrorInfo;
  } else {
    echo 'Message has been sent.';
  }

  
?>