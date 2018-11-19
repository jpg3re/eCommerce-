<?php
	session_start();
     $_SESSION["login"]="true";
     header("location:index.php");
?>