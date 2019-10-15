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
     <title>Produk Pertanian</title>
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
     <!--judul untuk kategori-->
     <div class="bgkategori">
         <h2><b>"Produk Hasil Pertanian"</b></h2>
     </div>
     <!--judul kategori end-->
    <!--isi kategori-->
    <div class="atas-product-card" id="grid-3">
    <?php 
     $dsn = 'mysql:host=localhost;dbname=hasilpanen';
     $username = 'root';
     $password = '';
     
     try{
         // connect to mysql
         $con = new PDO($dsn,$username,$password);
         $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     } catch (Exception $ex) {
         echo 'Not Connected '.$ex->getMessage();
     }
  $product=$con->prepare("SELECT * FROM `produk_pertanian`");
  $product->execute();
  $productsaya= $product->fetchAll();
    foreach($productsaya as $hasil){
    ?>
	<div class="product-card">
	<img src="./assets/default-thumbnail.png" alt="coffe bean">
	<div class="judul"><h3><?php echo $hasil['judul'];?></h3></div>
	<div class="harga"><h4><?php echo $hasil['harga'];?></h4></div>
	<div class="deskripsi"><h5><?php echo substr($hasil['deskripsi'],0,44);?>...</h5></div>
	<br>
	<div class="button-buy-product"><a href="product-show.php?id=<?php echo $hasil['id']?>" class="button-buy">BELI</a></div>
	</div>	
    <?php
    }
?>
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