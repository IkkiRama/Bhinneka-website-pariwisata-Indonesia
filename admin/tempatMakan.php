<?php
require "koneksi.php";

if (empty($_SESSION['admin'])) {
		echo"<script>
		alert('Anda harus login')
		location = 'masuk.php'
	</script>";
}

$data = [];
$ambil = $conn->query("SELECT * FROM tempatMakan");
while($pecah = $ambil->fetch_assoc()){
	$data[] = $pecah;
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bhinneka | Tempat Makan admin</title>
</head>
<body>
	<h1>Tempat Makan Bhinneka</h1>
	<?php require "layout/navbar.php" ?>

	<br><br>
	<a href="tambahTempatMakan.php">Tambah Tempat Makan</a>
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
			<td><?php echo $value['nama_tempat_makan'] ?></td>
			<td>
				<a href="ubahTempatMakan.php?id=<?php echo $value['id_tempat_makan'] ?>">Ubah</a> |
				<a href="hapusTempatMakan.php?id=<?php echo $value['id_tempat_makan'] ?>" onclick="return confirm('Yakin?')">Hapus</a>
			</td>
		</tr>
		<?php endforeach ?>
	</table>

</body>
</html>
