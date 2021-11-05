<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="">
    <meta name="description" content="anjay">
    <title>Masuk | Bhinneka</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <script src="fontawesome/js/all.min.js"></script>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/favicon.png">
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

                <form action="">

                    <div class="form-group">
                        <label for="namaDepan">Nama Depan <span>*</span> </label>

                        <div class="form-control">
                            <input type="text" id="namaDepan" autocomplete required>
                            <div class="icon">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="namaBelakang">Nama Belakang <span>*</span> </label>

                        <div class="form-control">
                            <input type="text" id="namaBelakang" autocomplete>
                            <div class="icon">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="email">Alamat Email <span>*</span> </label>

                        <div class="form-control">
                            <input type="email" id="email" autocomplete required>
                            <div class="icon">
                                <i class="fas fa-at"></i>
                            </div>
                        </div>

                    </div>


                    <div class="form-group">
                        <label for="password">Password <span>*</span> </label>

                        <div class="form-control">
                            <input type="password" id="password" autocomplete required>

                            <div class="icon">
                                <i class="fas fa-eye-slash"></i>
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="password2">Konfirmasi Password <span>*</span> </label>

                        <div class="form-control">
                            <input type="password" id="password2" autocomplete required>

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

                    <button class="daftarPelanggan">Daftar</button>

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