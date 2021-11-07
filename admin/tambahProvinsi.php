<?php require "koneksi.php" ?>
<?php

if (empty($_SESSION['admin'])) {
		echo"<script>
		alert('Anda harus login')
		location = 'masuk.php'
	</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Provinsi | Bhinneka</title>
</head>
<body>
	<h1>Tambah Daftar Provinsi</h1>
	<?php require "./layout/navbar.php" ?>

	<br><br>


	<form method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="nama">Nama Provinsi : </label>
				<input type="text" name="nama" id="nama" >
			</li>

			<li>
				<label for="deskripsiSingkat">Deskripsi Singkat : </label>
				<textarea name="deskripsiSingkat" id="deskripsiSingkat"></textarea>
			</li>

			<li>
				<label for="deskripsiLengkap">Deskripsi Lengkap : </label>
				<textarea name="deskripsiLengkap" id="deskripsiLengkap"></textarea>
			</li>

			<li>
				<label for="foto">Foto Provinsi : </label>
				<input type="file" name="foto" id="foto" >
			</li>

			<li>
				<button name="tambah" type="submit">Tambah</button>
			</li>
		</ul>
	</form>


</body>
</html>



<?php


if (isset($_POST['tambah'])) {

	$nama = htmlspecialchars($_POST['nama']);
	$deskripsiSingkat = htmlspecialchars($_POST['deskripsiSingkat']);
	$deskripsiLengkap = htmlspecialchars($_POST['deskripsiLengkap']);



	$namaFoto = $_FILES['foto']['name'];
	$tmp_name = $_FILES['foto']['tmp_name'];
	$error = $_FILES['foto']['error'];
	$size = $_FILES['foto']['size'];
	$type = $_FILES['foto']['type'];




	if (empty($nama)|| empty($deskripsiSingkat)|| empty($deskripsiLengkap)) {
		echo"<script>
			alert('harap isi semua formulir')
			location = 'provinsi.php'
		</script>";
	}




	if ($error == 4) {
		echo"<script>
			alert('harap upload foto')
			location = 'provinsi.php'
		</script>";
	}

	if ($type !== "image/jpeg" && $type !== "image/png") {
		echo"<script>
			alert('harap upload foto sesuai ketentuan')
			location = 'provinsi.php'
		</script>";
	}

	if ($size >= 4000000) {
		echo"<script>
			alert('foto terlalu besar')
			location = 'provinsi.php'
		</script>";
	}



	$ekstensi = explode('.', $namaFoto);
	$ekstensi = strtolower(end($ekstensi));

	$namaFiks = uniqid() . '.' . $ekstensi;
	move_uploaded_file($tmp_name, "../fotoProvinsi/".$namaFiks);



	$conn->query("INSERT INTO provinsi VALUES(null, '$nama', '$deskripsiSingkat', '$deskripsiLengkap', '$namaFiks')");


	echo"<script>
			alert('Data berhasil ditambahkan')
			location = 'provinsi.php'
		</script>";


}







?>