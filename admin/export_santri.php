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
		border: 1px solid #3c3c3c;
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

<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Santri.xls");
?>

<center>
	<h1>Data Santri Putra-Putri<br/> Ponpes Al Hikmah Pedurungan Semarang</h1>
</center>

<table border="1">
	<tr>
		<th width="10px">No</th>
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
	$mysql="SELECT * FROM santri";
	$query= mysqli_query($conn,$mysql);
	$nomor=1;
	while ($data=mysqli_fetch_array($query)) {

		?>
		<!-- <tbody> -->
			<tr>
				<td><?php echo $nomor++; ?></td>
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
</body>
</html>