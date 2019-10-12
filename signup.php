<?php
require 'config.php';

if(isset($_POST["register"])){

	if( signup($_POST) > 0 ){
    header("Location: login.php");
    exit();
	}else {
		echo mysqli_error($conn);
	}
}

?>






<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Daftar : Hasil Panen</title>
  <link rel='stylesheet' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
<link rel="stylesheet" href="./css/signup.css">
</head>
<body>

<form action="" method="post">
<div class='signup'>
  <div class='signup_title'>
    <span>Daftar Akun Anda</span>
  </div>
  <div class='signup_fields'>
    <div class='signup_fields__user'>
      <div class='icon'>
        <img src='./assets/nameIcon.png' width="15px">
      </div>
      <input placeholder='Nama Lengkap' type='text' name="name" id="name">
      
    </div>
    <div class='signup_fields__password'>
      <div class='icon'>
        <img src='./assets/usernameIcon.png' width="15px">
      </div>
      <input placeholder='Username' type='text' name="username" id="username">
    </div>
    <div class='signup_fields__password'>
     <div class='icon'>
        <img src='./assets/e-mailIcon.png' width="15px">
    </div>
     <input placeholder='E-mail' type='email' name="email" id="email">
  </div>
    <div class='signup_fields__password'>
        <div class='icon'>
        <img src='./assets/lockIcon.png' width="15px">
    </div>
    <input placeholder='Password' type='password' name="password" id="password">
    </div>
    <div class='signup_fields__submit'>
      <input type='submit' value='DAFTAR' name="register" id="register">
      <div class='forgot'>
        <a href='login.php'>Saya sudah punya akun</a>
      </div>
    </div>
  </div>
 
  <div class='disclaimer'>
    <p>Dengan masuk  atau mendaftar berarti 
            anda setuju dan diharapkan mengikuti peraturan 
            serta ketentuan yang berlaku</p>
  </div>
</div>
</form>

<script src='./js/jquery.js'></script>
<script  src="./js/script.js"></script>

</body>
</html>