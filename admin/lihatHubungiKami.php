<?php
require "koneksi.php";

if (empty($_SESSION['admin'])) {
		echo"<script>
		alert('Anda harus login')
		location = 'masuk.php'
	</script>";
}

$id = $_GET['id'];

$data = [];
$ambil = $conn->query("SELECT * FROM kontak WHERE id_kontak = '$id' ");
$pecah = $ambil->fetch_assoc();





?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bhinneka | hubungi kami admin</title>
</head>
<body>

	<h1>hubungi kami Bhinneka</h1>
	<?php require "layout/navbar.php" ?>

	<ul>
		<li><?php echo $pecah['email_pengirim'] ?></li>
		<li><?php echo $pecah['judul_kontak'] ?></li>
		<li><?php echo $pecah['pesan'] ?></li>
		<li><a href="hubungiKami.php">Kembali</a></li>
	</ul>

</body>
</html>
