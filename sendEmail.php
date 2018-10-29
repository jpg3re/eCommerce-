<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 require 'vendor\autoload.php';
// require 'C:\xampp\PHPMailer\src\Exception.php';
// require 'C:\xampp\PHPMailer\src\PHPMailer.php';
//require 'C:\xampp\PHPMailer\src\SMTP.php';
$mail = new PHPMailer;                              // Passing `true` enables exceptions
try {

    

 $mail->setFrom($_POST['email'], $_POST['name']);
 $mail->addAddress('custombucha@gmail.com');
 $mail->Subject  = $_POST['subject'];
 $mail->Body     = $_POST['message'];

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
     //header('Location: success.html');
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>