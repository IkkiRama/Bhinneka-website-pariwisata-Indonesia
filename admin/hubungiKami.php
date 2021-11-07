<?php
require "koneksi.php";

if (empty($_SESSION['admin'])) {
		echo"<script>
		alert('Anda harus login')
		location = 'masuk.php'
	</script>";
}

$data = [];
$ambil = $conn->query("SELECT * FROM kontak ");
while($pecah = $ambil->fetch_assoc()){
	$data[] = $pecah;
}





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


	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No</th>
			<th>Email Pengirim</th>
			<th>Judul</th>
			<th>Aksi</th>
		</tr>

		<?php foreach ($data as $key => $value): ?>
		<tr>
			<td><?php echo $key+1 ?></td>
			<td><?php echo $value['email_pengirim'] ?></td>
			<td><?php echo $value['judul_kontak'] ?></td>
			<td><a href="lihatHubungiKami.php?id=<?php echo $value['id_kontak'] ?>">Lihat Detail</a></td>
		</tr>
		<?php endforeach ?>
	</table>

</body>
</html>
