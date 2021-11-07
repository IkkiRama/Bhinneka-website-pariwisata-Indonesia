<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "layout/header.php" ?>
    <title>Hubungi Kami | CodePee</title>
</head>

<body>


    <?php require "layout/navbar.php" ?>


    <section class="kontak pb-100 pt-15-vh">
        <div class="container">
            <img src="img/CONTACT_IMAGE.svg" alt="img">

            <div class="caption">
                <h1>Kontak Kami</h1>

                <form method="post">

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Masukkan email anda...">
                    </div>

                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" id="judul" name="judul" placeholder="Masukkan judul...">
                    </div>

                    <div class="form-group">
                        <label for="pesan">Pesan</label>
                        <textarea name="pesan" id="pesan" cols="30" rows="10"
                            placeholder="Masukkan pesan anda..."></textarea>
                    </div>

                    <button type="submit" name="kirim">Kirim</button>

                </form>
            </div>
        </div>
    </section>













    <?php require "layout/footer.php" ?>



    <script src="js/script.js"></script>

    <script src="fontawesome/js/all.min.js"></script>
</body>

</html>

<?php
if (isset($_POST['kirim'])) {

    $email = htmlspecialchars($_POST['email']);
    $judul = htmlspecialchars($_POST['judul']);
    $pesan = htmlspecialchars($_POST['pesan']);

    if (empty($email)|| empty($judul)|| empty($pesan)) {
        echo"<script>
            alert('harap isi semua formulir')
            location = 'kontak.php'
        </script>";
    }



    $conn->query("INSERT INTO kontak VALUES(null, '$email', '$judul', '$pesan')");


    echo"<script>
            alert('Data berhasil dikirim')
            location = 'kontak.php'
        </script>";


}


?>