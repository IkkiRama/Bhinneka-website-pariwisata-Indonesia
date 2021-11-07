<?php

require("koneksi.php");
$id = $_GET['id'];
if (empty($id)) {
	echo"<script>
			alert('Jangan nakal')
			location = 'tempatMakan.php'
		</script>";
}


if (empty($_SESSION['admin'])) {
		echo"<script>
		alert('Anda harus login')
		location = 'masuk.php'
	</script>";
}
$conn->query("DELETE FROM tempatMakan WHERE id_tempat_makan = '$id' ");


	echo"<script>
			alert('Data berhasil dihapus')
			location = 'tempatMakan.php'
		</script>";

?>