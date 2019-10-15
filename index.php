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

 <!-- <a href="logout.php">	loggout</a> -->

<div class="navbar"><a href="#" class="">
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
<div class="banner-big">
	<img src="./assets/banner-big.png" alt="">
</div>
<div class="banner-small">
	<img src="./assets/banner-small.png" alt="">
</div>

<!--masuk ke section promosi-->
<section class="promosi-area" id="grid">
	<ul>
		<li>
			<div class="card">
				<div class="card-content">
					<img src="./assets/tomato.png" alt="gambar tomat">
					<br>
					<h2 class="judulpromo">Tomat Jogja Istimewa</h2>
				</div>
			</div>
		</li>
		<li>
			<div class="card">
				<div class="card-content-2">
					<div class="harga-promo">
						<h3> Discount 20% <br> Rp.12000/kg </h3>
					</div>
					<div class="buy-promo">
						<a href="#" class="tombol-beli-promo">Beli Sekarang</a>
					</div>
				</div>
			</div>
		</li>
	</ul>

</section>

<div class="category-tittle">
	<h2>KATEGORI</h2>
</div>

<section class="macam-kategori" id="grid-2">
	<ul>
		<li><a href="pertanian.php" class="gopertanian">
			<div class="card">
				<div class="card-content-3">
					<p> Pertanian</p>
				</div>
			</div>
			</a>
		</li>
	</ul>
	<ul>
		<li><a href="#" class="goperkebunan">
			<div class="card">
				<div class="card-content-4">
					<p> Perkebunan </p>
				</div>
			</div>
			</a>
		</li>
	</ul>
	<ul>
		<li><a href="#" class="gopeternakan">
			<div class="card">
				<div class="card-content-5">
					<p> Peternakan</p>
				</div>
			</div>
			</a>
		</li>
	</ul>
	<ul>
		<li><a href="#" class="goperikanan">
			<div class="card">
				<div class="card-content-6">
					<p> Perikanan </p>
				</div>
			</div>
			</a>
		</li>
	</ul>
</section>

<div class="produk-pilihan-tittle">
<h2>PRODUK PILIHAN</h2>
</div>
<div class="atas-product-card" id="grid-3">
	
	<div class="product-card">
	<img src="./assets/default-thumbnail.png" alt="coffe bean">
	<div class="judul"><h3>lorem ipsum</h3></div>
	<div class="harga"><h4>Rp.0</h4></div>
	<div class="deskripsi"><h5>Lorem ipsum dolor sit amet consectetur adipisicing.</h5></div>
	<br>
	<div class="button-buy-product"><a href="#" class="button-buy">BELI</a></div>
	</div>

	<div class="product-card">
	<img src="./assets/default-thumbnail.png" alt="coffe bean">
	<div class="judul"><h3>lorem ipsum</h3></div>
	<div class="harga"><h4>Rp.0</h4></div>
	<div class="deskripsi"><h5>Lorem ipsum dolor sit amet consectetur adipisicing.</h5></div>
	<br>
	<div class="button-buy-product"><a href="#" class="button-buy">BELI</a></div>
	</div>
	
	<div class="product-card">
	<img src="./assets/default-thumbnail.png" alt="coffe bean">
	<div class="judul"><h3>lorem ipsum</h3></div>
	<div class="harga"><h4>Rp.0</h4></div>
	<div class="deskripsi"><h5>Lorem ipsum dolor sit amet consectetur adipisicing.</h5></div>
	<br>
	<div class="button-buy-product"><a href="#" class="button-buy">BELI</a></div>
	</div>

	<div class="product-card">
	<img src="./assets/default-thumbnail.png" alt="coffe bean">
	<div class="judul"><h3>lorem ipsum</h3></div>
	<div class="harga"><h4>Rp.0</h4></div>
	<div class="deskripsi"><h5>Lorem ipsum dolor sit amet consectetur adipisicing.</h5></div>
	<br>
	<div class="button-buy-product"><a href="#" class="button-buy">BELI</a></div>
	</div>

	
	<div class="product-card">
	<img src="./assets/default-thumbnail.png" alt="coffe bean">
	<div class="judul"><h3>lorem ipsum</h3></div>
	<div class="harga"><h4>Rp.0</h4></div>
	<div class="deskripsi"><h5>Lorem ipsum dolor sit amet consectetur adipisicing.</h5></div>
	<br>
	<div class="button-buy-product"><a href="#" class="button-buy">BELI</a></div>
	</div>

	
	<div class="product-card">
	<img src="./assets/default-thumbnail.png" alt="coffe bean">
	<div class="judul"><h3>lorem ipsum</h3></div>
	<div class="harga"><h4>Rp.0</h4></div>
	<div class="deskripsi"><h5>Lorem ipsum dolor sit amet consectetur adipisicing.</h5></div>
	<br>
	<div class="button-buy-product"><a href="#" class="button-buy">BELI</a></div>
	</div>

	
	
</div>
<div class="kata-orang">
<div class="kata-orang-bglayer">
	<div class="kata-orang-tittle">
		<h2>Kenapa Belanja di Kami?</h2>
	</div>
	<div class="testimoni-avatar">
		<img src="./assets/farmer.png" alt="farmmer profile picture" class="avatar">
	</div>
	<div class="testimoni">
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Quis soluta iste, commodi aspernatur doloribus ut et perferendis accusamus cupiditate amet!</p>
		<br>
		<p> -Lorem, ipsum dolor</p>
	</div>
</div>
</div>
<div class="keunggulan">
	<div class="keunggulan-macam">
		<img src="./assets/harga-ic.svg" alt="harga-icon">
		<h3>Harga Murah</h3>
	</div>
	<div class="keunggulan-macam">
		<img src="./assets/kategori-ic.svg" alt="harga-icon">
		<h3>Macam Kategori</h3>
	</div>
	<div class="keunggulan-macam">
		<img src="./assets/petir-ic.svg" alt="harga-icon">
		<h3>Pelayanan Cepat</h3>
	</div>
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