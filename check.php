<?php

$db_connection = pg_connect("host=ec2-184-72-234-230.compute-1.amazonaws.com port=5432 dbname=d9n13lvg10h48 user=cmjanmfuwvlbwe password=
97d83c70e48411627d817565d0b1d3f2d592e6df32448158238e69eae50a61aa");

$this_password= $_POST['password'];
// $hashed_password = password_hash($this_password, PASSWORD_DEFAULT);
$email=$_POST['email'];
$check=pg_query($db_connection,"SELECT * FROM siteusers WHERE email='$email'");
$row = pg_fetch_assoc($check);
//echo "<html><script type="text/javascript">alert('$check');</script></html>";
if(password_verify($this_password,$row['password'])){
    session_start();
    $_SESSION["login"]="true";
    $_SESSION["full_name"] = $row['full_name'];
    $_SESSION["email"] = $row['email'];
    $_SESSION["address"] = $row['address'];
    $_SESSION["city"] = $row['city'];
    $_SESSION["state"] = $row['state'];
    $_SESSION["zip_code"] = $row['zip_code'];
    $_SESSION["password"] = $row['password']; 
	header('Location: member-home.php');
}
else{
    echo "Incorrect email or password.";
    header('Location: log-in2.php');
}
?>
