<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "layout/header.php" ?>
    <title>Artikel | Bhinneka</title>
</head>

<body>
    <?php

        $data = [];
        $ambil = $conn->query("SELECT * FROM artikel");
        while($pecah = $ambil->fetch_assoc()){
            $data[] = $pecah;
        }


    ?>

    <?php require "layout/navbar.php" ?>

    <!-- Rekomendasi Artikel Start -->
    <section class="rekomendasiArtikel">
        <div class="container">
            <h2 class="title">Artikel Terbaru</h2>

            <?php foreach ($data as $key => $value): ?>
            <a href="perArtikel.php?id=<?php echo $value['id_artikel'] ?>" class="perArtikel">
                <img src="fotoArtikel/<?php echo $value['foto_artikel'] ?>" alt="perArtikel img">
                <h2><?php echo $value['title_artikel'] ?></h2>
                <p><?php echo $value['slug_konten'] ?></p>

                <div class="btn">
                    <button>Baca Selengkapnya</button>
                </div>
            </a>
            <?php endforeach ?>



        </div>
    </section>
    <!-- Rekomendasi Artikel End -->

    <?php require "layout/footer.php" ?>


    <script src="js/script.js"></script>

</body>

</html>