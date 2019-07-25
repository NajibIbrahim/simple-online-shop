<?php
include "koneksi.php";

$email = $_GET['email'];
$sql= $conn->query("DELETE FROM pemesanan WHERE email='$email'");

if ($sql) {
	?>
	<script type="text/javascript">
		alert("Hapus Data Berhasil!");
		document.location='?halaman=dataorder';
	</script>
	<?php
}
else  {
	echo "Gagal Hapus Data";
}
?>