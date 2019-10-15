<?php 
session_start();

$db = mysqli_connect("localhost", "root", "", "hasilpanen");

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}



if (isset($_SESSION["adminlogin"])) {
	header("Location: admin/admin.php");
	exit();
}

if (isset($_POST["login"])) {
	$jeneng = $_POST["jeneng"];
	$kunci = $_POST["kunci"];

  $result = mysqli_query($db, "SELECT * FROM useradmin WHERE username = '$jeneng'");
  

// cek username
	if (mysqli_num_rows($result) === 1) {
		
		// cek password
		$row = mysqli_fetch_assoc($result);
		if(($kunci == $row["password"])){
			// set session
      $_SESSION["adminlogin"] = true;
      setcookie('id',$row['id']);
      setcookie('username', $row['username']);
      setcookie('adminlogin',$admindetect="true");
      header("Location: admin/admin.php");
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
      <input placeholder='Username' type='text' name="jeneng" id="jeneng">
    
    </div>
    <div class='login_fields__password'>
      <div class='icon'>
        <img src='./assets/lockIcon.png' width="15px">
      </div>
      <input placeholder='Password' type='password' name="kunci" id="kunci">
    </div>
    <div class="checkbox">
        <!-- <input class="styled-checkbox" type="checkbox" name="remember" id="remember"> -->
        <!-- <label for="remember" > Ingat saya</label> -->
    </div><center>
    <div class='login_fields__submit'>
      <input type='submit' value='login' name="login">
      </center>
    </div>
  </div>
 
  <div class='disclaimer'>
    <p></p>
  </div>
</div>
</form>

<script src='./js/jquery.js'></script>
<script  src="./js/script.js"></script>

</body>
</html>