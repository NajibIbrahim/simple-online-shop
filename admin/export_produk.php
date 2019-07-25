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
	<h1>Data Berita <br/> Ponpes Al Hikmah Pedurungan Semarang</h1>
</center>

<table border="1">
	<tr>
		<th width="10px">No</th>
		<th>tanggal</th>
		<th>keterangan</th>
		<th>Judul</th>
		<th>Isi</th>
		
	</tr>
	<?php
                // $conn = mysqli_connect("localhost", "root", "", "pondok");
	include "koneksi.php";
	if ($conn->connect_errno) {
		echo die("Gagal Masuk Database: ".$conn->connect_error);
	}
	$mysql="SELECT * FROM berita";
	$query= mysqli_query($conn,$mysql);
	$nomor=1;
	while ($data=mysqli_fetch_array($query)) {

		?>
		<!-- <tbody> -->
			<tr>
				<td><?php echo $data['tanggal'];?></td>
                      <td><?php echo $data['ket'];?></td>
                      <td><?php echo $data['judul'];?></td>
                      <td><?= substr($data['isi'], 0,100); ?> .....</td>
				
			</tr>
			<?php

		}
		?>
	</table>
</body>
</html>