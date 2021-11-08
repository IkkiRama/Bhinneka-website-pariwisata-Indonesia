<?php
require("koneksi.php");
$id = $_GET['id'];

if (empty($id)) {
	echo"<script>
			alert('Jangan nakal')
			location = 'destinasi.php'
		</script>";
}

if (empty($_SESSION['admin'])) {
		echo"<script>
		alert('Anda harus login')
		location = 'masuk.php'
	</script>";
}


$conn->query("DELETE FROM destinasi WHERE id_destinasi = '$id' ");


	echo"<script>
			alert('Data berhasil dihapus')
			location = 'destinasi.php'
		</script>";

?>