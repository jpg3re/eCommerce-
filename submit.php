<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$db_connection = pg_connect("host=ec2-184-72-234-230.compute-1.amazonaws.com port=5432 dbname=d9n13lvg10h48 user=cmjanmfuwvlbwe password=
97d83c70e48411627d817565d0b1d3f2d592e6df32448158238e69eae50a61aa");

$password= $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$email=$_POST['email'];

     $check=pg_query($db_connection,"SELECT * FROM siteusers WHERE email='$email'");
      if(pg_num_rows($check)>0){
         
         ?>
          <script>

         $('#email').after('<span class="error" style="color:red">Email already exists</span>');

       </script>
    <?php

  header('Location: sign-up2.php');
        
         
     }
else{
    //echo "Username works";
	$query = "INSERT INTO siteusers VALUES ('$_POST[full_name]','$email','$_POST[address]', '$_POST[city]', '$_POST[state]', '$_POST[zip_code]', '$hashed_password')";
    $result = pg_query($query);
    $mail = new PHPMailer;                              
$mail->IsSMTP();
$mail->SMTPAuth   = true; 
$mail->Host ="smtp.gmail.com";
$mail->Port = 587;  
$mail->Username   = "custombucha@gmail.com"; // SMTP account username
$mail->Password   = "Custombucha19";        // SMTP account password
//$mail->SMTPDebug=4;
//$mail->SMTPSecure='ssl';
 $mail->setFrom("custombucha@gmail.com", "CostumBucha Incorporated");
 $mail->addAddress($email);
 $mail->Subject  = "Sign up Confirmation";
 $mail->Body     = "Thank you for signing up for CostumBucha. We hope you order some of our delicious Kombucha soon.";

 if(!$mail->send()) {
    echo 'Message was not sent.';
    echo 'Mailer error: ' . $mail->ErrorInfo;
    
	header('Location: index.php');
  } else {
    echo 'Message has been sent.';
  }
  header('Location: index.php');
}  

?>