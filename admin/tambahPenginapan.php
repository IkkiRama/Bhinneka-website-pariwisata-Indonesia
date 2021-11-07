<?php require "koneksi.php" ?>
<?php 
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
	<title>Tambah Penginapan | Bhinneka</title>
</head>
<body>
	<h1>Tambah Daftar Penginapan</h1>
	<?php require "./layout/navbar.php" ?>

	<br><br>


	<form method="post">
		<ul>
			<li>
				<label for="provinsi">Provinsi Penginapan : </label>
				<select name="provinsi" id="provinsi">
					<?php foreach ($data as $key => $value): ?>
					<option value="<?php echo $value['id_provinsi'] ?>"><?php echo $value['nama_provinsi'] ?></option>
					<?php endforeach ?>
				</select>
			</li>

			<li>
				<label for="nama">Nama Penginapan : </label>
				<input type="text" name="nama" id="nama" >
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
	$provinsi = htmlspecialchars($_POST['provinsi']);



	if (empty($nama)|| empty($provinsi)) {
		echo"<script>
			alert('harap isi semua formulir')
			location = 'penginapan.php'
		</script>";
	}


	$conn->query("INSERT INTO penginapan VALUES(null, '$provinsi', '$nama')");


	echo"<script>
			alert('Data berhasil ditambahkan')
			location = 'penginapan.php'
		</script>";


}







?>