<?php 
session_start();

require 'config.php';

if (isset($_SESSION["login"])) {
	header("Location: index.php");
	exit();

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil Panen</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>  
<div class="container">
    <div class="welcome">
        <h1 class="welcome-tittle">Selamat Datang di <br>Hasil Panen</h1>
    </div>
    <a href="login.php" class="btn-login">MASUK</a>
    <a href="signup.php" class="btn-signup">DAFTAR</a>
</div>
    
</body>
</html>