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
	<title>Tambah Penginapan | Bhinneka</title>
</head>
<body>
	<h1>Tambah Daftar Penginapan</h1>
	<?php require "./layout/navbar.php" ?>

	<br><br>


	<form method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="title">Judul Artikel : </label>
				<input type="text" name="title" id="title" >
			</li>

			<li>
				<label for="slugKonten">Slug Konten Artikel : </label>
				<input type="text" name="slugKonten" id="slugKonten" >
			</li>

			<li>
				<label for="konten">Konten Artikel : </label>
				<textarea name="konten" id="konten"></textarea>
			</li>

			<li>
				<label for="foto">Foto Artikel : </label>
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

	$title = htmlspecialchars($_POST['title']);
	$slugKonten = htmlspecialchars($_POST['slugKonten']);
	$konten = htmlspecialchars($_POST['konten']);
	$tanggal = date("Y-m-d");
	$penulis = $_SESSION['admin']['nama_user'];



	$namaFoto = $_FILES['foto']['name'];
	$tmp_name = $_FILES['foto']['tmp_name'];
	$error = $_FILES['foto']['error'];
	$size = $_FILES['foto']['size'];
	$type = $_FILES['foto']['type'];



	if (empty($title)|| empty($konten) || empty($slugKonten)) {
		echo"<script>
			alert('harap isi semua formulir')
			location = 'artikel.php'
		</script>";
	}



	if ($error == 4) {
		echo"<script>
			alert('harap upload foto')
			location = 'artikel.php'
		</script>";
	}

	if ($type !== "image/jpeg" && $type !== "image/png") {
		echo"<script>
			alert('harap upload foto sesuai ketentuan')
			location = 'artikel.php'
		</script>";
	}

	if ($size >= 4000000) {
		echo"<script>
			alert('foto terlalu besar')
			location = 'artikel.php'
		</script>";
	}


	$ekstensi = explode('.', $namaFoto);
	$ekstensi = strtolower(end($ekstensi));

	$namaFiks = uniqid() . '.' . $ekstensi;
	move_uploaded_file($tmp_name, "../fotoArtikel/".$namaFiks);



	$conn->query("INSERT INTO artikel VALUES(null, '$penulis', '$title', '$slugKonten', '$konten', '$tanggal', '$namaFiks')");


	echo"<script>
			alert('Data berhasil ditambahkan')
			location = 'artikel.php'
		</script>";


}







?>