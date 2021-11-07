<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "layout/header.php" ?>
    <?php


    $id = $_GET['id'];
    $ambil = $conn->query("SELECT * FROM provinsi WHERE id_provinsi = '$id' ");
    $pecah = $ambil->fetch_assoc();

    ?>
    <title><?php echo $pecah['nama_provinsi'] ?> | CodePee</title>
</head>

<body>

    <?php require "layout/navbar.php" ?>
    <?php

    $dataPenginapan = [];
    $dataTempatMakan = [];
    $dataKomentar = [];
    

    $ambilPenginapan = $conn->query("SELECT * FROM penginapan WHERE id_provinsi = '$id' ");
    while($pecahPenginapan = $ambilPenginapan->fetch_assoc()){
        $dataPenginapan[] = $pecahPenginapan;
    }


    $ambilTempatMakan = $conn->query("SELECT * FROM tempatmakan WHERE id_provinsi = '$id' ");
    while($pecahTempatMakan = $ambilTempatMakan->fetch_assoc()){
        $dataTempatMakan[] = $pecahTempatMakan;
    }


    $ambilKomentar = $conn->query("SELECT * FROM komentar LEFT JOIN user ON komentar.nama_user = user.nama_user WHERE id_provinsi = '$id' ");
    while($pecahKomentar = $ambilKomentar->fetch_assoc()){
        $dataKomentar[] = $pecahKomentar;
    }

    ?>


    <!-- 30 rem -->
    <section class="heroDetailKelas pt-100 pb-100">
        <div class="container">

            <div class="caption">
                <h1><?php echo $pecah['nama_provinsi'] ?></h1>

                <p><?php echo $pecah['deskripsi_singkat_provinsi'] ?></p>
            </div>

            <!-- <div class="img"></div> -->
            <img src="fotoProvinsi/<?php echo $pecah['foto_provinsi'] ?>" alt="img kelas">
        </div>
    </section>


    <!-- detail kelas -->
    <section class="detailKelas pt-50 pb-50">
        <div class="container">
            <div class="tentangKelas">

                <div class="perTentangKelas">

                    <h2>Tentang</h2>

                    <p><?php echo htmlspecialchars_decode($pecah['deskripsi_lengkap']) ?></p>

                </div>



                <div class="perTentangKelas">
                    <h2>Daftar Destinasi</h2>

                    <div class="materi">
                        <p>kontol</p>
                        <p>kontol</p>
                        <p>kontol</p>
                        <p>kontol</p>
                        <p>kontol</p>
                        <p>kontol</p>
                    </div>
                </div>


                <div class="perTentangKelas">
                    <h2>Penginapan</h2>

                    <p>Berikut beberapa rekomendasi penginapan yang bisa anda manfaatkan saat berlibur di <?php echo $pecah['nama_provinsi'] ?></p>


                    <div class="materi">
                       <?php foreach ($dataPenginapan as $key => $value): ?>
                        <p><?php echo $value['nama_penginapan'] ?></p>
                        <?php endforeach ?>
                    </div>
                </div>


                <div class="perTentangKelas">
                    <h2>Tempat Makan</h2>

                    <p>Berikut beberapa rekomendasi tempat makan yang bisa anda manfaatkan saat berlibur di <?php echo $pecah['nama_provinsi'] ?></p>


                    <div class="materi">
                        <?php foreach ($dataTempatMakan as $key => $value): ?>
                        <p><?php echo $value['nama_tempat_makan'] ?></p>
                        <?php endforeach ?>
                    </div>
                </div>


                <div class="perTentangKelas">
                    <h2>Komentar</h2>

                    <p>Silahkan berikan pendapat anda tentang destinasi wisata yang ada di <?php echo $pecah['nama_provinsi'] ?></p>

                    <form method="post" class="mt-25">

                        <div class="form-group">
                            <label for="komentar">Komentar</label>
                            <textarea name="komentar" id="" cols="30" rows="10" placeholder="Masukkan komentar..."></textarea>
                        </div>

                        <button type="submit" name="kirim">Kirim</button>
                    </form>



                    <div class="komentar pt-50">
                        <?php foreach ($dataKomentar as $key => $value): ?>
                            
                        <div class="perKomentar">
                            <div class="orang">
                                <img src="fotoUser/<?php echo $value['foto_user'] ?>" alt="orang">
                                <div class="caption">
                                    <h3><?php echo $value['nama_user'] ?></h3>
                                    <p>Diposting pada <?php echo $value['tanggal_posting'] ?></p>
                                </div>
                            </div>

                            <p class="isiKomentar"><?php echo $value['isi_komentar'] ?></p>
                        </div>
                        <?php endforeach ?>

                    </div>

                </div>





            </div>

            <div class="infoKelas">
                <div class="perInfoKelas">
                    <h2>Detail Kelas</h2>

                    <div class="infoMateri">
                        <div class="icon">
                            <i class="fas fa-clipboard"></i>
                        </div>
                        <p>8 Destinasi</p>
                    </div>

                    <div class="infoMateri">
                        <div class="icon">
                            <i class="fas fa-hotel"></i>
                        </div>
                        <p>8 Penginapan</p>
                    </div>

                    <div class="infoMateri">
                        <div class="icon">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <p>8 Tempat Makan</p>
                    </div>

                </div>
            </div>
        </div>
    </section>




    <?php require "layout/footer.php" ?>




    <script src="js/script.js"></script>


</body>

</html>
<?php


if (isset($_POST['kirim'])) {
    if (isset($_SESSION['pelanggan'])) {
        $komentar = htmlspecialchars($_POST['komentar']);
        $namaPelanggan = $_SESSION['pelanggan']['nama_user'];

        if (empty($komentar)) {
            echo"<script>
                alert('Isi semua formulir')
                location = 'detailDestinasi.php?id=$id'
            </script>";
        }


        $conn->query("INSERT INTO komentar VALUES(null,'$id', '$namaPelanggan', null, '$komentar')");

        echo"<script>
            alert('Komentar Berhasil Dikirim')
            location = 'detailDestinasi.php?id=$id'
        </script>";

    }else{
        echo"<script>
            alert('Anda harus login')
            location = 'masuk.php'
        </script>";
    }
}



?>