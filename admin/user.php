<?php
require "koneksi.php";

if (empty($_SESSION['admin'])) {
		echo"<script>
		alert('Anda harus login')
		location = 'masuk.php'
	</script>";
}

$data = [];
$ambil = $conn->query("SELECT * FROM user WHERE role_user = 'pelanggan' ");
while($pecah = $ambil->fetch_assoc()){
	$data[] = $pecah;
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bhinneka | user admin</title>
</head>
<body>
	<h1>user Bhinneka</h1>
	<?php require "layout/navbar.php" ?>

	<br><br>
	<a href="tambahuser.php">Tambah user</a>
	<br><br>


	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No</th>
			<th>Foto</th>
			<th>Role</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Aksi</th>
		</tr>

		<?php foreach ($data as $key => $value): ?>
		<tr>
			<td><?php echo $key+1 ?></td>
			<td><img src="../fotoUser/<?php echo $value['foto_user'] ?>" width="100" height="100"></td>
			<td><?php echo $value['role_user'] ?></td>
			<td><?php echo $value['nama_user'] ?></td>
			<td><?php echo $value['email_user'] ?></td>
			<td>
				<a href="ubahUser.php?id=<?php echo $value['id_user'] ?>">Ubah</a> |
				<a href="hapusUser.php?id=<?php echo $value['id_user'] ?>" onclick="return confirm('Yakin?')">Hapus</a>
			</td>
		</tr>
		<?php endforeach ?>
	</table>

</body>
</html>
