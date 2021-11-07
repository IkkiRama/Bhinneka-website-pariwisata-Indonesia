<?php
require("koneksi.php");
$id = $_GET['id'];

if (empty($id)) {
	echo"<script>
			alert('Jangan nakal')
			location = 'penginapan.php'
		</script>";
}

if (empty($_SESSION['admin'])) {
		echo"<script>
		alert('Anda harus login')
		location = 'masuk.php'
	</script>";
}


$conn->query("DELETE FROM penginapan WHERE id_penginapan = '$id' ");


	echo"<script>
			alert('Data berhasil dihapus')
			location = 'penginapan.php'
		</script>";

?>