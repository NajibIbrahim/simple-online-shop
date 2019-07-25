<?php
include 'koneksi.php';

$sql = "SELECT * FROM produk limit 4";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>B-mon Shop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
-->

<!-- Facebook and Twitter integration -->
<meta property="og:title" content=""/>
<meta property="og:image" content=""/>
<meta property="og:url" content=""/>
<meta property="og:site_name" content=""/>
<meta property="og:description" content=""/>
<meta name="twitter:title" content="" />
<meta name="twitter:image" content="" />
<meta name="twitter:url" content="" />
<meta name="twitter:card" content="" />

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="shortcut icon" href="favicon.ico">

<link href="https://fonts.googleapis.com/css?family=Montez" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

<!-- Animate.css -->
<link rel="stylesheet" href="css/animate.css">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="css/icomoon.css">
<!-- Bootstrap  -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- Superfish -->
<link rel="stylesheet" href="css/superfish.css">
<!-- Magnific Popup -->
<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="css/style.css">

<link rel="shortcut icon" type="image/x-icon" href="images/b.png"/>



<!-- Modernizr JS -->
<script src="js/modernizr-2.6.2.min.js"></script>
<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>
	<div id="fh5co-wrapper">
		<div id="fh5co-page">

			<div class="fh5co-hero" data-section="home">
				<div class="fh5co-overlay"></div>
				<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/1.jpg);">
					<div class="display-t">
						<div class="display-tc">
							<div class="container">
								<div class="col-md-10 col-md-offset-1">
									<div class="animate-box">
										<h1>B-mon Shop</h1>
										<h2>Erna Rosalina</h2>
										<p><span>A11.2017.10756</span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<header id="fh5co-header-section" class="sticky-banner">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
						<h1 id="fh5co-logo"><a href="index.html">B-mon Shop</a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li class="active"><a href="index.php" >Home</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="produk.php">Product</a></li>
								<li><a href="bukutamu.php">Contact Us</a></li>
								<li><a href="login/index.php">Login</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>

			<!-- end:header-top -->

			<div id="fh5co-gallery">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
							<h3 style="color: #808080;">Welcome to B-mon Shop</h3>
							<p><i>Kami menyediakan berbagai produk kemeja berkualitas export tentunya dengan harga yang relatif terjangkau.</i></p>
						</div>
					</div>

					<?php while($produk = mysqli_fetch_array($result)){

						?>
						<div class="col-md-3">
							<div class="thumbnail">
								<a href="admin/img/produk/<?= $produk['gambar_p']; ?>">
									<img src="admin/img/produk/<?= $produk['gambar_p']; ?>" class="img-thumbnail">
								</a>
								<div class="caption">
									<p><?= $produk['nama_p']; ?></p>
									<p><b>Rp. <?= $produk['harga_p']; ?>,-</b></p>
									<a href="datadiri.php" class="btn btn-info btn-sm">
										<span class="fa fa-plus"></span> Buy 
									</a>

									<a href="lihatproduk.php?nama_p=<?= $produk['nama_p'];?>" class="btn btn-primary btn-sm">
										<span class="fa fa-shopping-cart"></span> Details 
									</a>
								</div>
							</div>
						</div>

						<?php
					}
					?>

				</div>
			</div>




			<footer>
				<div id="footer">
					<div class="container">
						<div class="row">
							<div class="col-md-12 text-center">
								<h2>Erna Rosalina</h2>
							</div>
							<div class="col-md-6 col-md-offset-3 text-center">
								<p class="fh5co-social-icons">
									<a href="#"><i class="icon-twitter2"></i></a>
									<a href="#"><i class="icon-facebook2"></i></a>
									<a href="#"><i class="icon-instagram"></i></a>
									<a href="#"><i class="icon-dribbble2"></i></a>
									<a href="#"><i class="icon-youtube"></i></a>
								</p>
								<p>Copyright @ B-mon Shop <i class="icon-heart3"></i>. All Rights Reserved.</a></p>
							</div>
						</div>
					</div>
				</div>
			</footer>



		</div>
		<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<!-- jQuery -->
	<script src="dist/scripts.min.js"></script>
</body>
</html>

