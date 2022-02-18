<?php
session_start();
//koneksi ke database
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>URSELF.CO</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>
	<div class="jumbotron jumbotron-fluid text-center">
		<div class="container">
			<h1 class="display-4"><span class="font-weight-bold">URSELF.CO</span></h1>
			<hr>
			<p class="lead font-weight-bold">Silakan Pesan Barang Sesuai Keinginan Anda <br> Enjoy Your Shopping <br> 
			<li><a href="https://instagram.com/urself_co?utm_medium=copy_link"> <img src="ig.png" width="20" height="20" ></i> @URSELF.CO</a></li></p>
		</div>
	</div>
<?php include 'menu.php'; ?>
<!-- konten -->
<section class="konten">
	<div class="container">
		<h1>Produk URSELF.CO</h1>

		<div class="row">
			<?php $ambil = $koneksi->query("SELECT * FROM produk "); ?>
			<?php while($perproduk = $ambil->fetch_assoc()){ ?>
				
			<div class="col-md-3">
				<div class="thumbnail">
					<img src="foto_produk/<?php echo $perproduk['foto_produk']; ?>" alt="">
					<div class="caption">
						<h3><?php echo $perproduk['nama_produk']; ?></h3>
						<h5>Rp. <?php echo number_format($perproduk['harga_produk']); ?></h5>
						<a href="beli.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-primary">Beli</a>
						<a href="detail.php?id=<?php echo $perproduk["id_produk"]; ?>" class="btn btn-default">detail</a>
					</div>
				</div>
			</div>
		<?php } ?>




  </div>
</div>
</section>

</body>
</html>