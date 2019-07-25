<?php
include "koneksi.php";

$no = $_GET['no'];
$sql= $conn->query("DELETE FROM data WHERE no='$no'");

if ($sql) {
	?>
	<script type="text/javascript">
		alert("Hapus Data Berhasil!");
		document.location='?halaman=datapesan';
	</script>
	<?php
}
else  {
	echo "Gagal Hapus Data";
}
?>