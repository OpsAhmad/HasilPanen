<?php 
session_start();

if (!isset($_SESSION["adminlogin"])) {
	header("Location: ./../adminlogin.php");
	exit();
}

?>