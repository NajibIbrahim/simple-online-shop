<!DOCTYPE html>
<html>
<head>
	<title>Export Data Ke Excel</title>
</head>
<body>
	<style type="text/css">
		body{
			font-family: sans-serif;
		}
		table{
			margin: 20px auto;
			border-collapse: collapse;
		}
		table th,
		table td{
			border: 0px solid #3c3c3c;
			padding: 3px 8px;

		}
		a{
			background: blue;
			color: #fff;
			padding: 8px 10px;
			text-decoration: none;
			border-radius: 2px;
		}
	</style>

	<center>
		<h1>Data Administrasi<br/> Santri Ponpes Al Hikmah Pedurungan Semarang</h1>
	</center>

	<table border="0">
		<tr>
			<th>Nama</th>
			<th>ID Santri</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th width="100px">Jenis Kelamin</th>
			<th width="100px">Tahun Masuk</th>
			<th>Alamat</th>
			<th width="90px">Status</th>
			<th width="80px">Tagihan</th>
			<th>Total</th>
		</tr>
		<?php
                // $conn = mysqli_connect("localhost", "root", "", "pondok");
		include "koneksi.php";
		if ($conn->connect_errno) {
			echo die("Gagal Masuk Database: ".$conn->connect_error);
		}
		// $username=$_SESSION['user']['username'];
		$mysql="SELECT * FROM santri WHERE id_san='$_GET[id]'";
		$query= mysqli_query($conn,$mysql);
		while ($data=mysqli_fetch_array($query)) {

			?>
			<!-- <tbody> -->
				<tr>
					<td><?php echo $data['nama_san'];?></td>
					<td><?php echo $data['id_san'];?></td>
					<td><?php echo $data['tempat_san'];?></td>
					<td><?php echo $data['tanggal_san'];?></td>
					<td><?php echo $data['jkel_san'];?></td>
					<td><?php echo $data['tahun_san'];?></td>
					<td><?php echo $data['alamat_san'];?></td>
					<td><?php echo $data['status_san'];?></td>
					<td><?php echo $data['tagihan_san'];?> Bulan</td>
					<td><?php echo $data['total_san'];?></td>
				</tr>
				<?php

			}
			?>
		</table>
		<script>
			window.print();
		</script>
	</body>
	</html>

