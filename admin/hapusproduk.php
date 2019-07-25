<?php
include "koneksi.php";

$nama_p = $_GET['nama_p'];

$sql2 = mysqli_query($conn, "SELECT gambar_p FROM produk WHERE nama_p='$nama_p' ");
$pecah = mysqli_fetch_array($sql2);
$gambar = $pecah['gambar_p'];
if(is_file("img/produk/$gambar"))
{
	unlink("img/produk/$gambar");
}


$sql= $conn->query("DELETE FROM produk WHERE nama_p='$nama_p'");


if ($sql) {
	?>
	<script type="text/javascript">
		alert("Hapus Data Berhasil!");
		document.location='?halaman=dataproduk';
	</script>
	<?php
}
else  {
	echo "Gagal Hapus Data";
}
?>