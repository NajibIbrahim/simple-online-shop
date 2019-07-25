
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
				<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/4.jpg);">
					<div class="display-t">
						<div class="display-tc">
							<div class="container">
								<div class="col-md-10 col-md-offset-1">
									<div class="animate-box">
										<h1>B-mon Shop</h1>
										<h2>Details</h2>
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
								<li><a href="index.html" >Home</a></li>
								<li><a href="about.html">About</a></li>
								<li class="active"><a href="produk.html">Produk</a></li>
								<li><a href="bukutamu.php">Contact Us</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>

			<!-- end:header-top -->
			<?php
			include "koneksi.php";
			/*
			$sql = $conn->query("SELECT * FROM berita join label using(id_label) WHERE judul='$_GET[judul]'");
			*/
			$sql = $conn->query("SELECT * FROM produk WHERE nama_p='$_GET[nama_p]'");
			$d = $sql->fetch_assoc();

			?>
			<div class="container">
				<div class="row row-right-padded-md">
					<div class="col-lg-12 col-md-1 col-sm-1">
						<div class="fh5co-blog animate-box">
							<div class="blog-text">
								
								<div class="prod-title">
									<div class="col-md-3">
										<div class="thumbnail">
											<a href="admin/img/produk/<?php echo $d['gambar_p'];?>">
												<img src="admin/img/produk/<?php echo $d['gambar_p'];?>" class="img-thumbnail">
											</a>
											<div class="caption">
												<p style="text-align: center;"><?php echo $d['nama_p']; ?></p>
											</div>
										</div>
									</div>
								</div>
								<table border="0">

									<tr>
										<td>	
											<div class="prod-title">
												<p><strong>Price :</strong><br>
													<i>	
														Rp. <?php echo $d['harga_p']; ?>,-<br>
													</i>
												</p>
											</div>
										</td>
									</tr>
									<tr>
										<td>	
											<div class="prod-title">
												<p><strong>Stok :</strong><br>
													<i>	
														<?php echo $d['stok_p']; ?><br>
													</i>
												</p>
											</div>
										</td>
									</tr>
									<tr>
										<td>	
											<div class="prod-title">
												<p><strong>Spesification :</strong><br>
													<i>	
														<?php echo $d['spesifikasi_p']; ?>
													</i>
												</p>
											</div>
										</td>
									</tr>
								</table>

								<!-- <button type="submit" name="simpan" class="col-sm-4-6 btn btn-primary btn-user">Buy Product</button> -->
								<a href="datadiri.php" class="btn btn-primary btn-sm">
									BUY PRODUCT  
								</a>
							</div> 


						</div>
					</div>
				</div>

			</div>
			<footer>
				<div id="footer">
					<div class="container">
						<div class="row">
							<div class="col-md-12 text-center">
								<h2>B-mon Shop</h2>
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