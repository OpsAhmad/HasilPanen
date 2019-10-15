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
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Profil Saya</title>
     <link rel="stylesheet" href="./css/kategori.css">
 </head>
 <body>
     <!--untuk navbar-->
 <div class="navbar"><a href="index.php" class="">
	<img src="./assets/logo.png" alt="logo" class="logo">
</a>
	<div class="wrap">
   <div class="search">
      <input type="text" class="searchTerm" placeholder="Saya butuh...">
      <button type="submit" class="searchButton">
     </button>
   </div>
</div><a href="logout.php" class="">
	<img src="./assets/logout.svg" alt="profile icon" class="profilebtn">
	</a>
</div>
<img src="" alt="">
    <!--navbar selesai-->
     <!--judul untuk kategori-->
     <div class="bgkategori">
         <h2><b>Profil Saya</b></h2>
     </div>
     <!--judul kategori end-->
     <div class="profile-card">
    <img src="./assets/default-profile.svg" alt="missie williams avatar" class="thumbnail-profile">
    <h2 class="nama-saya"><b><?php echo $_COOKIE['username']?></b></h2>
    <h3 class="nama-saya">Email Saya: <b><?php echo $_COOKIE['email']?></b></h3>
    <h3>BIO</h3>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus repellat consequuntur sed eveniet, maxime quis non deserunt tempore consequatur voluptates!</p>
 </div>
 </body>
 <footer class="footer">
	<li><a href="logout.php" class="logout"><p>Logout</p></a></li>
	<li><a href="#" class="bantuan"><p>Bantuan</p></a></li>
	<li><a href="#" class="kebijakan-privasi"><p>Kebijakan Privasi</p></a></li>
	<li><a href="#" class="feedback"><p>Feedback</p></a></li>
	<br>
	<p>&copy Hasil Panen 2019</p>
</footer>
 </html>