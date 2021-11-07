<?php
require("koneksi.php");
$id = $_GET['id'];

if (empty($id)) {
	echo"<script>
			alert('Jangan nakal')
			location = 'artikel.php'
		</script>";
}

if (empty($_SESSION['admin'])) {
		echo"<script>
		alert('Anda harus login')
		location = 'masuk.php'
	</script>";
}


$conn->query("DELETE FROM artikel WHERE id_artikel = '$id' ");


	echo"<script>
			alert('Data berhasil dihapus')
			location = 'artikel.php'
		</script>";

?>