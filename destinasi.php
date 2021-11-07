<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "layout/header.php" ?>
    <title>Destinasi | Bhinneka</title>
</head>

<body>
   <?php

        $data = [];
        $ambil = $conn->query("SELECT * FROM provinsi");
        while($pecah = $ambil->fetch_assoc()){
            $data[] = $pecah;
        }


    ?>
   
    <?php require "layout/navbar.php" ?>


    <section class="heroHome pt-100 destinasiHero">
        <div class="container">

            <div class="caption">
                <h1>Hidup untuk Berlibur, Berlibur untuk Hidup</h1>

                <p>
                    Kami adalah tim orang-orang kreatif yang sangat bersemangat untuk terhubung, menemukan wawasan baru,
                    dan membangun hal-hal luar biasa bersama Anda!
                </p>

            </div>

            <div class="hero-img">
                <img src="img/destinasi/home-destinasi.svg" alt="Home Banner" class="thumbnail">
            </div>

        </div>
    </section>



    <section class="dataKelas pt-50" id="kelas">
        <div class="container">
            <h2>Daftar Destinasi</h2>
        </div>
    </section>

    <section class="kelasHome pb-100">
        <div class="container">

            <div class="kelas flex-wrap">

                <?php foreach ($data as $key => $value): ?>
                <div class="perKelas">
                    <img src="fotoProvinsi/<?php echo $value['foto_provinsi'] ?>" alt="html">
                    <h3><?php echo $value['nama_provinsi'] ?></h3>
                    <p class="deskripsiSingkat"><?php echo $value['deskripsi_singkat_provinsi'] ?></p>

                    <div class="btn">
                        <a href="detailDestinasi.php?id=<?php echo $value['id_provinsi'] ?>" class="selengkapnya">Selengkapnya</a>
                    </div>
                </div>
                <?php endforeach ?>

            </div>

        </div>
    </section>























    <?php require "layout/footer.php" ?>

    <script src="js/script.js"></script>
</body>

</html>