<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "layout/header.php" ?>
    <title>Daftar | Bhinneka</title>
</head>

<body>

 
    <?php require "layout/navbar.php" ?>



    <!-- Login Start -->
    <section class="containerLogin">
        <div class="container">
            <h1>Selamat Datang di TasBee</h1>

            <div class="login">
                <h2>Daftar sebagai pelanggan</h2>
                <p>Sebelum memulai perjalananmu, yuk cerita tentang dirimu</p>

                <form method="post">

                    <div class="form-group">
                        <label for="namaDepan">Nama Depan <span>*</span> </label>

                        <div class="form-control">
                            <input type="text" id="namaDepan" name="namaDepan" autocomplete required>
                            <div class="icon">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="namaBelakang">Nama Belakang <span>*</span> </label>

                        <div class="form-control">
                            <input type="text" id="namaBelakang" name="namaBelakang" autocomplete>
                            <div class="icon">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="email">Alamat Email <span>*</span> </label>

                        <div class="form-control">
                            <input type="email" id="email" name="email" autocomplete required>
                            <div class="icon">
                                <i class="fas fa-at"></i>
                            </div>
                        </div>

                    </div>


                    <div class="form-group">
                        <label for="password1">Password <span>*</span> </label>

                        <div class="form-control">
                            <input type="password" id="password1" name="password1" autocomplete required>

                            <div class="icon">
                                <i class="fas fa-eye-slash"></i>
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="password2">Konfirmasi Password <span>*</span> </label>

                        <div class="form-control">
                            <input type="password" id="password2" name="password2" autocomplete required>

                            <div class="icon">
                                <i class="fas fa-eye-slash"></i>
                            </div>
                        </div>

                    </div>


                    <div class="syaratDaftar">

                        <div class="syaratKetentuan">


                            <input type="checkbox" id="syaratKetentuan">
                            <label for="syaratKetentuan">
                                Saya setuju dengan <a href="index.html">Syarat & Ketentuan</a> dan <a
                                    href="index.html">Kebijakan Privasi</a>
                            </label>

                        </div>

                        <div class="newsLetter">
                            <input type="checkbox" id="newsLetter" checked>
                            <label for="newsLetter">Saya ingin berlangganan NewsLetter</label>
                        </div>

                    </div>

                    <button class="daftarPelanggan" name="daftar" type="submit">Daftar</button>

                </form>

                <p class="BelumPunyaAkun">Sudah punya akun? <a href="masuk.html">Masuk di sini</a></p>


            </div>
        </div>
    </section>
    <!-- Login End -->


    <?php require "layout/footer.php" ?>

    <script src="js/script.js"></script>

</body>

</html>

<?php


if (isset($_POST['daftar'])) {
    $namaDepan = htmlspecialchars($_POST['namaDepan']);
    $namaBelakang = htmlspecialchars($_POST['namaBelakang']);
    $email = htmlspecialchars($_POST['email']);
    $password1 = htmlspecialchars($_POST['password1']);
    $password2 = htmlspecialchars($_POST['password2']);
    $namaLengkap = $namaDepan .' '.$namaBelakang;


    $ambil = $conn->query("SELECT * FROM user WHERE email_user = '$email' ");
    $yangCocok = $ambil->num_rows;


    if ($yangCocok === 1) {
        echo"<script>
            alert('email sudah digunakan')
            location = 'daftar.php'
        </script>";
    }


    if (empty($namaDepan)|| empty($email)|| empty($password1)|| empty($password2)) {
        echo"<script>
            alert('harap isi semua formulir')
            location = 'daftar.php'
        </script>";
    }

    if ($password1 !== $password2) {
        echo"<script>
            alert('password tidak sama')
            location = 'daftar.php'
        </script>";
    }

    $passwordBaru = password_hash($password1, PASSWORD_DEFAULT);


    $conn->query("INSERT INTO user VALUES(null, 'pelanggan', '$namaLengkap', '$email', 'user.svg', '$passwordBaru')");


    echo"<script>
            alert('anda berhasil membuat akun, silahkan login')
            location = 'masuk.php'
        </script>";

}


?>