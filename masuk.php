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

            <div class="login">
                <h2>Masuk sebagai pelanggan</h2>
                <p>Sudah punya akun TasBee? Yuk masuk untuk mengakses beragam fitur TasBee</p>

                <form action="">
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


                    <div class="form-info">
                        <div class="ingatSaya">
                            <input type="checkbox" id="ingatSaya">
                            <label for="ingatSaya">Ingat Saya</label>
                        </div>

                        <a href="register.html">Lupa Password?</a>
                    </div>

                    <button type="submit" class="masuk">Masuk</button>

                </form>

                <p class="BelumPunyaAkun">Belum punya akun? <a href="daftar.html">Daftar di sini</a></p>


            </div>
        </div>
    </section>
    <!-- Login End -->



    <?php require "layout/footer.php" ?>

    <script src="js/script.js"></script>

</body>

</html>