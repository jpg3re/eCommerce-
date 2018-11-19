<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$db_connection = pg_connect("host=ec2-184-72-234-230.compute-1.amazonaws.com port=5432 dbname=d9n13lvg10h48 user=cmjanmfuwvlbwe password=
97d83c70e48411627d817565d0b1d3f2d592e6df32448158238e69eae50a61aa");
  $a = $_POST['address'];
  $c = $_POST['city'];
  $s = $_POST['state'];
  $z = $_POST['zip_code'];
  $e = $_SESSION['email'];
	$query = "UPDATE siteusers SET address = '$a', city = '$c', state = '$s', zip_code = '$z' WHERE email = '$e'";
  $result = pg_query($query);
?>
