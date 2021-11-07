<?php
require "koneksi.php";
if (empty($_SESSION['admin'])) {
		echo"<script>
		alert('Anda harus login')
		location = 'masuk.php'
	</script>";
}

$data = [];
$ambil = $conn->query("SELECT * FROM artikel");
while($pecah = $ambil->fetch_assoc()){
	$data[] = $pecah;
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bhinneka | artikel admin</title>
</head>
<body>
	<h1>artikel Bhinneka</h1>
	<?php require "layout/navbar.php" ?>

	<br><br>
	<a href="tambahArtikel.php">Tambah artikel</a>
	<br><br>


	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No</th>
			<th>Foto</th>
			<th>Penulis</th>
			<th>Judul</th>
			<th>Tanggal Diposting</th>
			<th>Aksi</th>
		</tr>

		<?php foreach ($data as $key => $value): ?>
		<tr>
			<td><?php echo $key+1 ?></td>
			<td><img src="../fotoArtikel/<?php echo $value['foto_artikel'] ?>" width="100" height="100"></td>
			<td><?php echo $value['nama_penulis'] ?></td>
			<td><?php echo $value['title_artikel'] ?></td>
			<td><?php echo $value['tanggal_posting_artikel'] ?></td>
			<td>
				<a href="ubahArtikel.php?id=<?php echo $value['id_artikel'] ?>">Ubah</a> |
				<a href="hapusArtikel.php?id=<?php echo $value['id_artikel'] ?>" onclick="return confirm('Yakin?')">Hapus</a>
			</td>
		</tr>
		<?php endforeach ?>
	</table>

</body>
</html>
