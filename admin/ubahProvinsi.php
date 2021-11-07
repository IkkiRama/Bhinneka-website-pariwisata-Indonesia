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
			location = 'provinsi.php'
		</script>";
}




$ambil = $conn->query("SELECT * FROM provinsi WHERE id_provinsi = '$id' ");
$pecah = $ambil->fetch_assoc();





?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ubah Provinsi | Bhinneka</title>
</head>
<body>

	<h1>Ubah Provinsi </h1>
	<?php require "layout/navbar.php" ?>


	<form method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="nama">Nama Provinsi : </label>
				<input value="<?php echo $pecah['nama_provinsi'] ?>" type="text" name="nama" id="nama" >
			</li>

			<li>
				<label for="deskripsiSingkat">Deskripsi Singkat : </label>
				<textarea name="deskripsiSingkat" id="deskripsiSingkat"><?php echo $pecah['deskripsi_singkat_provinsi'] ?></textarea>
			</li>

			<li>
				<label for="deskripsiLengkap">Deskripsi Lengkap : </label>
				<textarea name="deskripsiLengkap" id="deskripsiLengkap"><?php echo $pecah['deskripsi_lengkap'] ?></textarea>
			</li>

			<li>
				<label for="foto">Foto Provinsi : </label>
				<br>
				<img src="../fotoProvinsi/<?php echo $pecah['foto_provinsi'] ?>" width="100" height="100">
				<br>
				<input value="<?php echo $pecah[''] ?>" type="file" name="foto" id="foto" >
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




	if (empty($tmp_name)) {

		$conn->query("UPDATE provinsi SET 
			nama_provinsi = '$nama',
			deskripsi_singkat_provinsi = '$deskripsiSingkat',
			deskripsi_lengkap = '$deskripsiLengkap'
			WHERE id_provinsi = '$id'
		");

	}else{


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



		$conn->query("UPDATE provinsi SET 
			nama_provinsi = '$nama',
			deskripsi_singkat_provinsi = '$deskripsiSingkat',
			deskripsi_lengkap = '$deskripsiLengkap',
			foto_provinsi = '$namaFiks'
			WHERE id_provinsi = '$id'
		");
	}


	echo"<script>
			alert('Data berhasil diubah')
			location = 'provinsi.php'
		</script>";

}






?>