<?php require"koneksi.php";?>
<?php

    if (isset($_SESSION['admin'])) {
        echo"<script>
                alert('anda sudah login')
                location = 'index.php'
            </script>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bhinneka | Login admin</title>
</head>
<body>
	<h1>Login Bhinneka</h1>
	<?php require "layout/navbar.php" ?>
	
	<form method="post">
	<ul>
		<li>
			<label for="email">Email</label>
			<input type="email" name="email" id="email">
		</li>

		<li>
			<label for="password">password</label>
			<input type="password" name="password" id="password">
		</li>

		<li>
			<button type="submit" name="masuk">Masuk</button>
		</li>
	</ul>
	</form>


</body>
</html>




<?php


if (isset($_POST["masuk"])) {

    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);




    if (empty($email)|| empty($password)) {
        echo"<script>
            alert('harap isi semua formulir')
            location = 'masuk.php'
        </script>";
    }

    $data = [];
    $ambil = $conn->query("SELECT * FROM user WHERE email_user = '$email' AND password_user = '$password' AND role_user = 'admin' ");
    $yangCocok = $ambil->num_rows;
    $pecah = $ambil->fetch_assoc();



    if ($yangCocok === 1) {

        $_SESSION['admin'] = $pecah;
        echo"<script>
            alert('anda berhasil login')
            location = 'index.php'
        </script>";


    }



}


?>