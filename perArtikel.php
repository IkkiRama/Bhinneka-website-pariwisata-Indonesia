<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "layout/header.php" ?>
    <?php

    $id = $_GET['id'];
    $ambil = $conn->query("SELECT * FROM artikel WHERE id_artikel = '$id' ");
    $pecah = $ambil->fetch_assoc();

    $data = [];
    $ambilArtikel = $conn->query("SELECT * FROM artikel ORDER BY RAND() ");
    while($pecahArtikel = $ambilArtikel->fetch_assoc()){
        $data[] = $pecahArtikel;
    }


    ?>
    <title><?php echo $pecah['title_artikel'] ?> | Bhinneka</title>
</head>

<body>


    <?php require "layout/navbar.php" ?>    
    <section class="contentArtikel">
        <div class="container">

            <h1 class="titleArtikel" id="one"><?php echo $pecah['title_artikel'] ?></h1>

            <p class="writer">Ditulis oleh : <span><?php echo $pecah['nama_penulis'] ?></span> pada <?php echo $pecah['tanggal_posting_artikel'] ?> </p>

            <img src="fotoArtikel/<?php echo $pecah['foto_artikel'] ?>" alt="img Artikel" class="thumbnail">

            <?php echo htmlspecialchars_decode($pecah['konten']) ?>

        </div>

    </section>




    <!-- Rekomendasi Artikel Start -->
    <section class="rekomendasiArtikel">
        <div class="container">
            <h2 class="title">Rekomendasi Artikel</h2>


            <?php foreach ($data as $key => $value) { ?>
            <a href="perArtikel.php?id=<?php echo $value['id_artikel'] ?>" class="perArtikel">
                <img src="fotoArtikel/<?php echo $value['foto_artikel'] ?>" alt="perArtikel img">
                <h2><?php echo $value['title_artikel'] ?></h2>
                <p><?php echo $value['slug_konten'] ?></p>

                <div class="btn">
                    <button>Baca Selengkapnya</button>
                </div>
            </a>
            <?php } ?>


        </div>
    </section>
    <!-- Rekomendasi Artikel End -->


    <?php require "layout/footer.php" ?>

    <script src="js/script.js"></script>

</body>

</html>