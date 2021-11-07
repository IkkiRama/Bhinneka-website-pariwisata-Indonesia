<?php
require "koneksi.php";

if (empty($_SESSION['admin'])) {
		echo"<script>
		alert('Anda harus login')
		location = 'masuk.php'
	</script>";
}

$data = [];
$ambil = $conn->query("SELECT * FROM penginapan");
while($pecah = $ambil->fetch_assoc()){
	$data[] = $pecah;
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bhinneka | Penginapan admin</title>
</head>
<body>
	<h1>Penginapan Bhinneka</h1>
	<?php require "layout/navbar.php" ?>

	<br><br>
	<a href="tambahPenginapan.php">Tambah Penginapan</a>
	<br><br>


	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Aksi</th>
		</tr>

		<?php foreach ($data as $key => $value): ?>
		<tr>
			<td><?php echo $key+1 ?></td>
			<td><?php echo $value['nama_penginapan'] ?></td>
			<td>
				<a href="ubahPenginapan.php?id=<?php echo $value['id_penginapan'] ?>">Ubah</a> |
				<a href="hapusPenginapan.php?id=<?php echo $value['id_penginapan'] ?>" onclick="return confirm('Yakin?')">Hapus</a>
			</td>
		</tr>
		<?php endforeach ?>
	</table>

</body>
</html>
