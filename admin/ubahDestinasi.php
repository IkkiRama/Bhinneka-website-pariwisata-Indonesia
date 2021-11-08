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
			location = 'destinasi.php'
		</script>";
}


$ambil = $conn->query("SELECT * FROM destinasi WHERE id_destinasi = '$id' ");
$pecah = $ambil->fetch_assoc();



$data = [];
$ambilProvinsi = $conn->query("SELECT * FROM provinsi");
while($pecahProvinsi = $ambilProvinsi->fetch_assoc()){
	$data[] = $pecahProvinsi;
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ubah tempat makan | Bhinneka</title>
</head>
<body>

	<h1>Ubah tempat makan </h1>
	<?php require "layout/navbar.php" ?>


	<form method="post" enctype="multipart/form-data">
		<ul>

			<li>
				<label for="provinsi">Provinsi tempat makan : </label>
				<select name="provinsi" id="provinsi">
					<?php foreach ($data as $key => $value): ?>
					<option value="<?php echo $value['id_provinsi'] ?>" <?php if ($value['id_provinsi'] === $pecah['id_provinsi']): ?> selected <?php endif ?>><?php echo $value['nama_provinsi'] ?></option>
					<?php endforeach ?>
				</select>
			</li>


			<li>
				<label for="nama">Nama tempat makan : </label>
				<input value="<?php echo $pecah['nama_destinasi'] ?>" type="text" name="nama" id="nama" >
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
	$provinsi = htmlspecialchars($_POST['provinsi']);



	if (empty($nama)|| empty($provinsi)) {
		echo"<script>
			alert('harap isi semua formulir')
			location = 'destinasi.php'
		</script>";
	}


	$conn->query("UPDATE destinasi SET 
		id_provinsi =  '$provinsi',
		nama_destinasi =  '$nama' 
		WHERE id_destinasi = '$id'
		");


	echo"<script>
			alert('Data berhasil diubah')
			location = 'destinasi.php'
		</script>";


}







?>