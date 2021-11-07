<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "layout/header.php" ?>
    <title>Bhinneka | Website Pariwisata Indonesia</title>
</head>

<body>

    <?php

        $data = [];
        $ambil = $conn->query("SELECT * FROM provinsi ORDER BY RAND()");
        while($pecah = $ambil->fetch_assoc()){
            $data[] = $pecah;
        }


    ?>
    
    <?php require "layout/navbar.php" ?>


    <section class="heroHome pt-100">
        <div class="container">

            <div class="caption">
                <h1>Perjalanan Hebat untuk Penjelajah Tunggal</h1>

                <p>
                    Sejak 2014, kami telah membantu lebih dari 500.000 orang dari segala usia menikmati pengalaman
                    terbaik.
                </p>

                <a href="masuk.php">Gabung Sekarang</a>
            </div>
            
            <div class="hero-img">
                <img src="img/home-img.svg" alt="Home Banner" class="thumbnail">
            </div>

        </div>
    </section>





    <section class="penjelasan pt-100">
        <div class="container">
            <div class="title">
                <p>Start Holiday Today</p>
                <h2>Temui Destinasi Wisata<br>Yang Ada Diseluruh Indonesia</h2>
            </div>
        </div>
    </section>

    <section class="penjelasan pb-100">
        <div class="container">

            <div class="fitur flex-wrap ">
                <div class="perFitur">
                    <div class="icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>#ProdukLokal</h3>
                    <p>Temukan rekomendasi destinasi wisata di seluruh Indonesia</p>
                </div>

                <div class="perFitur">
                    <div class="icon">
                        <i class="fas fa-hiking"></i>
                    </div>
                    <h3>Petualangan Baru</h3>
                    <p>Temukan objek wisata yang anda belum ketahui sebelumnya</p>
                </div>

                <div class="perFitur">
                    <div class="icon">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <h3>Panduan Keamanan</h3>
                    <p>Pelajari tips dan trik menarik dari kami dengan membaca artikel</p>
                </div>

                <div class="perFitur">
                    <div class="icon">
                        <i class="fas fa-plane"></i>
                    </div>
                    <h3>Perjalanan Tercepat</h3>
                    <p>Temukan rekomendasi kendaraan yang terbaik di artikel kami</p>
                </div>

                <div class="perFitur">
                    <div class="icon">
                        <i class="fas fa-hotel"></i>
                    </div>
                    <h3>Hotel Terjangkau</h3>
                    <p>Temukan rekomendasi penginapan yang terbaik</p>
                </div>

                <div class="perFitur">
                    <div class="icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3>Makanan & Minuman</h3>
                    <p>Temukan rekomendasi tempat makan yang terbaik</p>
                </div>


            </div>
        </div>

    </section>


    <section class="kelasHome">
        <div class="container">
            <div class="title">
                <h2>Provinsi terpopuler</h2>
                <a href="destinasi.php">Lihat Semua</a>
            </div>
        </div>
    </section>

    <section class="kelasHome pb-100">
        <div class="container">

            <div class="kelas">
                <?php foreach ($data as $key => $value): ?>
                    <?php if ($key+1 <= 3): ?>
                        <div class="perKelas">
                    <img src="fotoProvinsi/<?php echo $value['foto_provinsi'] ?>" alt="html">
                    <h3><?php echo $value['nama_provinsi'] ?></h3>
                    <p class="deskripsiSingkat"><?php echo $value['deskripsi_singkat_provinsi'] ?></p>

                    <div class="btn">
                        <a href="detailDestinasi.php" class="selengkapnya">Selengkapnya</a>
                    </div>
                        </div>
                    <?php endif ?>

                <?php endforeach ?>
            </div>

        </div>
    </section>



    <section class="webinar" id="webinar">
        <div class="container">
            <div class="caption">
                <h2>baca artikel seru dari Bhin<span>neka</span></h2>
                <p>Tambah ilmu serta pengetahuan tentang destinasi wisata yang ada di Indonesia!</p>
                <a href="artikel.php">Lihat Selengkapnya</a>
            </div>
            <img src="img/FAQ2.webp" alt="Upload Event Img">
        </div>
    </section>
    <!-- upload event end -->




    <section class="penjelasan pt-100 ">
        <div class="container">
            <div class="title">
                <p class>Success Stories</p>
                <h2>Membangun Hasil Karya<br>Yang Bermanfaat</h2>
            </div>
        </div>
    </section>

    <section class="penjelasan pb-50">
        <div class="container">

            <div class="fitur flex-wrap testimoni">
                <div class="perFitur">
                    <img src="img/people/img1.jpg" alt="imgFitur">
                    <h3>Rifki Romadhan</h3>
                    <h4>Web Developer</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro asperiores deleniti ex. Architecto
                        sapiente doloribus eligendi, inventor</p>
                </div>

                <div class="perFitur">
                    <img src="img/people/img2.jpg" alt="imgFitur">
                    <h3>Anjay Markonjay</h3>
                    <h4>Web Developer</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam reprehenderit, dolore assumenda
                        quaerat opt.</p>
                </div>

                <div class="perFitur">
                    <img src="img/people/img3.jpg" alt="imgFitur">
                    <h3>Kasmad Warmad</h3>
                    <h4>Web Developer</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita odit officiis aut inci nam?
                    </p>
                </div>

            </div>
        </div>

    </section>



    <?php require "layout/footer.php" ?>


    <script src="js/script.js"></script>

</body>

</html>