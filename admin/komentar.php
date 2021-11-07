<?php
require "koneksi.php";

if (empty($_SESSION['admin'])) {
		echo"<script>
		alert('Anda harus login')
		location = 'masuk.php'
	</script>";
}

$data = [];
$ambil = $conn->query("SELECT * FROM komentar LEFT JOIN provinsi ON komentar.id_provinsi = provinsi.id_provinsi ");
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
	<!-- <pre>
		<?php
			//var_dump($data);
		?>
	</pre> -->

	<h1>Penginapan Bhinneka</h1>
	<?php require "layout/navbar.php" ?>


	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No</th>
			<th>Nama Provinsi</th>
			<th>Nama User</th>
			<th>Tanggal</th>
			<th>Komentar</th>
		</tr>

		<?php foreach ($data as $key => $value): ?>
		<tr>
			<td><?php echo $key+1 ?></td>
			<td><?php echo $value['nama_provinsi'] ?></td>
			<td><?php echo $value['nama_user'] ?></td>
			<td><?php echo $value['tanggal_posting'] ?></td>
			<td><?php echo $value['isi_komentar'] ?></td>
		</tr>
		<?php endforeach ?>
	</table>

</body>
</html>
