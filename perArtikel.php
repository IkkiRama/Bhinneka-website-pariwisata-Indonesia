<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "layout/header.php" ?>
    <?php

    $id = $_GET['id'];
    $ambil = $conn->query("SELECT * FROM artikel WHERE id_artikel = '$id' ");
    $pecah = $ambil->fetch_assoc();



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

            <a href="perArtikel.html" class="perArtikel">
                <img src="img/provinsi/provinsi.jpg" alt="perArtikel img">
                <h2>40+ Cara Mendapatkan Uang dari Internet [Terbaru]</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur quasi dignissimos amet aliquam
                    eligendi doloremque vel assumenda voluptate. Asperiores optio, quod hic molestias illo voluptatem et
                    exercitationem aut impedit explicabo.
                </p>

                <div class="btn">
                    <button>Baca Selengkapnya</button>
                </div>
            </a>


            <a href="perArtikel.html" class="perArtikel">
                <img src="img/provinsi/provinsi.jpg" alt="perArtikel img">
                <h2>40+ Cara Mendapatkan Uang dari Internet [Terbaru]</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur quasi dignissimos amet aliquam
                    eligendi doloremque vel assumenda voluptate. Asperiores optio, quod hic molestias illo voluptatem et
                    exercitationem aut impedit explicabo.
                </p>

                <div class="btn">
                    <button>Baca Selengkapnya</button>
                </div>
            </a>



            <a href="perArtikel.html" class="perArtikel">
                <img src="img/provinsi/provinsi.jpg" alt="perArtikel img">
                <h2>40+ Cara Mendapatkan Uang dari Internet [Terbaru]</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur quasi dignissimos amet aliquam
                    eligendi doloremque vel assumenda voluptate. Asperiores optio, quod hic molestias illo voluptatem et
                    exercitationem aut impedit explicabo.
                </p>

                <div class="btn">
                    <button>Baca Selengkapnya</button>
                </div>
            </a>


        </div>
    </section>
    <!-- Rekomendasi Artikel End -->


    <?php require "layout/footer.php" ?>

    <script src="js/script.js"></script>

</body>

</html>