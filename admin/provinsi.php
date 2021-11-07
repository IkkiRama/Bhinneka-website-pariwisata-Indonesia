<?php
require "koneksi.php";

if (empty($_SESSION['admin'])) {
		echo"<script>
		alert('Anda harus login')
		location = 'masuk.php'
	</script>";
}

$data = [];
$ambil = $conn->query("SELECT * FROM provinsi");
while($pecah = $ambil->fetch_assoc()){
	$data[] = $pecah;
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bhinneka | Provinsi admin</title>
</head>
<body>
	<h1>Provinsi Bhinneka</h1>
	<?php require "layout/navbar.php" ?>

	<br><br>
	<a href="tambahProvinsi.php">Tambah Provinsi</a>
	<br><br>


	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No</th>
			<th>Foto</th>
			<th>Nama</th>
			<th>Aksi</th>
		</tr>

		<?php foreach ($data as $key => $value): ?>
		<tr>
			<td><?php echo $key+1 ?></td>
			<td><img src="../fotoProvinsi/<?php echo $value['foto_provinsi'] ?>" width="100" height="100"></td>
			<td><?php echo $value['nama_provinsi'] ?></td>
			<td>
				<a href="ubahProvinsi.php?id=<?php echo $value['id_provinsi'] ?>">Ubah</a> |
				<a href="hapusProvinsi.php?id=<?php echo $value['id_provinsi'] ?>" onclick="return confirm('Yakin?')">Hapus</a>
			</td>
		</tr>
		<?php endforeach ?>
	</table>

</body>
</html>
