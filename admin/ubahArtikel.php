<?php require "koneksi.php" ?>

<?php

if (empty($_SESSION['admin'])) {
		echo"<script>
		alert('Anda harus login')
		location = 'masuk.php'
	</script>";
}

$id = $_GET['id'];

if (empty($id)) {
	echo"<script>
			alert('Jangan nakal')
			location = 'artikel.php'
		</script>";
}




$ambil = $conn->query("SELECT * FROM artikel WHERE id_artikel = '$id' ");
$pecah = $ambil->fetch_assoc();





?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ubah artikel | Bhinneka</title>
</head>
<body>

	<h1>Ubah artikel </h1>
	<?php require "layout/navbar.php" ?>



	<form method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="title">Judul Artikel : </label>
				<input value="<?php echo $pecah['title_artikel'] ?>" type="text" name="title" id="title" >
			</li>

			<li>
				<label for="slugKonten">Slug Konten Artikel : </label>
				<input value="<?php echo $pecah['slug_konten'] ?>" type="text" name="slugKonten" id="slugKonten" >
			</li>

			<li>
				<label for="konten">Konten Artikel : </label>
				<textarea name="konten" id="konten"><?php echo $pecah['konten'] ?></textarea>
			</li>

			<li>
				<label for="foto">Foto Artikel : </label>
				<br>
				<img src="../fotoArtikel/<?php echo $pecah['foto_artikel'] ?>" width="100" height="100">
				<br>
				<input type="file" name="foto" id="foto" >
			</li>

			<li>
				<button name="ubah" type="submit">Ubah</button>
			</li>
		</ul>
	</form>

</body>
</html>

<?php

	
if (isset($_POST['ubah'])) {

	$title = htmlspecialchars($_POST['title']);
	$slugKonten = htmlspecialchars($_POST['slugKonten']);
	$konten = htmlspecialchars($_POST['konten']);



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




	if (empty($tmp_name)) {

		$conn->query("UPDATE artikel SET 
			title_artikel = '$title',
			slug_konten = '$slugKonten',
			konten = '$konten'
			WHERE id_artikel = '$id'
		");

	}else{


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



		$conn->query("UPDATE artikel SET 
			title_artikel = '$title',
			slug_konten = '$slugKonten',
			konten = '$konten',
			foto_artikel = '$namaFiks'
			WHERE id_artikel = '$id'
		");
	}


	echo"<script>
			alert('Data berhasil diubah')
			location = 'artikel.php'
		</script>";

}






?>