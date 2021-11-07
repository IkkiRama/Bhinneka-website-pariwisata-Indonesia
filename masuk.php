

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "layout/header.php" ?>
    <title>Masuk | Bhinneka</title>
</head>

<body>

    <?php

        if (isset($_SESSION['pelanggan'])) {
            echo"<script>
                    alert('anda sudah login')
                    location = 'index.php'
                </script>";
        }

    ?>


    <?php require "layout/navbar.php" ?>


    <!-- Login Start -->
    <section class="containerLogin">
        <div class="container">

            <div class="login">
                <h2>Masuk sebagai pelanggan</h2>
                <p>Sudah punya akun TasBee? Yuk masuk untuk mengakses beragam fitur TasBee</p>

                <form method="post">
                    <div class="form-group">
                        <label for="email">Alamat Email <span>*</span> </label>

                        <div class="form-control">
                            <input type="email" id="email" name="email" autocomplete >
                            <div class="icon">
                                <i class="fas fa-at"></i>
                            </div>
                        </div>

                    </div>


                    <div class="form-group">
                        <label for="password">Password <span>*</span> </label>

                        <div class="form-control">
                            <input type="password" name="password" id="password" autocomplete>

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

                        <a href="register.php">Lupa Password?</a>
                    </div>

                    <button type="submit" name="masuk" class="masuk">Masuk</button>

                </form>

                <p class="BelumPunyaAkun">Belum punya akun? <a href="daftar.php">Daftar di sini</a></p>


            </div>
        </div>
    </section>
    <!-- Login End -->



    <?php require "layout/footer.php" ?>

    <script src="js/script.js"></script>

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
    $ambil = $conn->query("SELECT * FROM user WHERE email_user = '$email' ");
    $yangCocok = $ambil->num_rows;
    $pecah = $ambil->fetch_assoc();

    if ($yangCocok === 1) {
        if (password_verify($password, $pecah['password_user'])) {
            $_SESSION['pelanggan'] = $pecah;
            echo"<script>
                alert('anda berhasil login')
                location = 'index.php'
            </script>";
        }
    }



}


?>


