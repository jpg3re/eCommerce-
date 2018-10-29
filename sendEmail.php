<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 require 'vendor/autoload.php';
// require 'C:\xampp\PHPMailer\src\Exception.php';
// require 'C:\xampp\PHPMailer\src\PHPMailer.php';
//require 'C:\xampp\PHPMailer\src\SMTP.php';
$mail = new PHPMailer;                              // Passing `true` enables exceptions
try {

    

 $mail->setFrom($_POST['email'], $_POST['name']);
 $mail->addAddress('jpg3re@virginia.edu');
 $mail->Subject  = $_POST['subject'];
 $mail->Body     = $_POST['message'];

    $mail->send();
    echo 'Message has been sent';
     header('Location: contact-success.html');
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>