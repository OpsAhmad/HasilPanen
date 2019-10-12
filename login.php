<?php 
session_start();

require 'config.php';

// cek cookie
if(isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
		$id = $_COOKIE['id'];
		$key = $_COOKIE['username'];

		// ambil username berdasarkan id
		$result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
		$row = mysqli_fetch_assoc($result);

		// cek cookie dan username
		if( $key === ($row['username']) ){
			$_SESSION['login'] = true;
		}
}


if (isset($_SESSION["login"])) {
	header("Location: index.php");
	exit();
}

if (isset($_POST["login"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

// cek username
	if (mysqli_num_rows($result) === 1) {
		
		// cek password
		$row = mysqli_fetch_assoc($result);
		if(password_verify($password, $row["password"])){
			// set session
      $_SESSION["login"] = true;
      setcookie('id',$row['id']);
		  setcookie('username', $row['username']);
      header("Location: index.php");
			// cek remember me
			// if( isset($_POST['remember'])){
			// 	// buat cookie
			// setcookie('id',$row['id'],time() + 3600);
			// setcookie('key',hash('sha256', $row['username']), time()+ 3600);

			// header("Location: index.php");
			// exit;
			//}
		}
	}
	$error = true;

} 

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Masuk : Hasil Panen</title>
  <link rel='stylesheet' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
<link rel="stylesheet" href="./css/login.css">
</head>
<body>
<form action="" method="post">
<div class='login'>
  <div class='login_title'>
    <span>Masuk ke akun anda</span>
  </div>
  <div class='login_fields'>
    <div class='login_fields__user'>
      <div class='icon'>
        <img src='./assets/usernameIcon.png' width="15px;">
      </div>
      <input placeholder='Username' type='text' name="username" id="username">
    
    </div>
    <div class='login_fields__password'>
      <div class='icon'>
        <img src='./assets/lockIcon.png' width="15px">
      </div>
      <input placeholder='Password' type='password' name="password" id="password">
    </div>
    <div class="checkbox">
        <!-- <input class="styled-checkbox" type="checkbox" name="remember" id="remember"> -->
        <!-- <label for="remember" > Ingat saya</label> -->
    </div>
    <div class='login_fields__submit'>
      <input type='submit' value='login' name="login">
      
      <div class='forgot'>
        <a href='signup.php'>Saya belum punya akun</a>
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