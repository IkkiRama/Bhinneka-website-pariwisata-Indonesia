<?php
require("koneksi.php");
$id = $_GET['id'];

if (empty($id)) {
	echo"<script>
			alert('Jangan nakal')
			location = 'provinsi.php'
		</script>";
}

if (empty($_SESSION['admin'])) {
		echo"<script>
		alert('Anda harus login')
		location = 'masuk.php'
	</script>";
}


$conn->query("DELETE FROM provinsi WHERE id_provinsi = '$id' ");


	echo"<script>
			alert('Data berhasil dihapus')
			location = 'provinsi.php'
		</script>";

?>