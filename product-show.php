<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "hasilpanen";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 
  if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: index.php');
}

  $id = $_GET['id']; 
  $sql ="SELECT `id`, `foto`, `judul`, `harga`, `deskripsi` FROM `produk_pertanian` WHERE id=$id";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();

session_start();

$db = mysqli_connect("localhost", "root", "", "hasilpanen");


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
     <title>Hasil Panen :<?php echo $row['judul']?></title>
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
</div><a href="./profile.php" class="">
	<img src="./assets/profile-ic.png" alt="profile icon" class="profilebtn">
	</a>
</div>
<img src="" alt="">
    <!--navbar selesai-->
     <!--isi view product-->
     <div class="product-view">
        <div class="gambar-product">
            <img src="./assets/default-thumbnail.png" alt="gambar biji kopi">
        </div>
        <h2 class="judul-product">
        <?php echo $row['judul'] ?> 
    </h2>
        <h3 class="harga-product">
            RP. <?php echo $row['harga']?>
        </h3>
        <div class="deskripsi">
            <h3>Deskripsi:</h3>
            <p><?php echo $row['deskripsi']?></p>
        </div>
        <div class="area-checkout">
            <a href="#" class="buy-button">Beli Sekarang</a>
        </div>
    </div>
  
     <!--isi view product end-->
    <!--isi kategori-->
    <div class="atas-product-card" id="grid-3">
   
</div>
    <!--isi kategori end-->
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