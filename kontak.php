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
    <title>Hubungi Kami | CodePee</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/favicon.png">
</head>

<body>


    <?php require "layout/navbar.php" ?>


    <section class="kontak pb-100 pt-15-vh">
        <div class="container">
            <img src="img/CONTACT_IMAGE.svg" alt="img">

            <div class="caption">
                <h1>Kontak Kami</h1>

                <form action="">

                    <!-- <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" id="nama">
                    </div> -->

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" placeholder="Masukkan email anda...">
                    </div>

                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" id="judul" placeholder="Masukkan judul...">
                    </div>

                    <div class="form-group">
                        <label for="pesan">Pesan</label>
                        <textarea name="pesan" id="pesan" cols="30" rows="10"
                            placeholder="Masukkan pesan anda..."></textarea>
                    </div>

                    <button type="submit">Kirim</button>

                </form>
            </div>
        </div>
    </section>













    <?php require "layout/footer.php" ?>



    <script src="js/script.js"></script>

    <script src="fontawesome/js/all.min.js"></script>
</body>

</html>