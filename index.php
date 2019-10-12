<?php 
session_start();

if (!isset($_SESSION["login"])) {
	header("Location: wellcome.php");
	exit();
}

// mengkoneksi ke database
require 'config.php';


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Hasil Panen</title>
    <link rel="stylesheet" href="./css/beranda.css">
</head>

<body>

<a href="logout.php">logout</a>

<div class="navbar">
    <img src="./assets/logo.png" alt="logo" class="logo">
</div>
</body>
</html>