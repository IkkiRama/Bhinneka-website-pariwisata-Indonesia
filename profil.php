<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "layout/header.php" ?>
    <title>Profil | CodePee</title>
</head>

<body>

    <?php
    $id = $_GET['id'];

    if (empty($_SESSION['pelanggan'])) {
        echo"<script>
            alert('Anda harus login')
            location = 'masuk.php'
        </script>";
    }

    if ($id !== $_SESSION['pelanggan']['id_user']) {
            echo"<script>
                alert('Jangan nakal')
                location = 'profil.php?id=".$_SESSION['pelanggan']['id_user']."'
            </script>";
    }



    ?>

    <?php require "layout/navbar.php" ?>


    <section class="bg-profil">
        <div class="container"></div>
    </section>
    <section class="profil pb-100">
        <div class="container">

            <div class="profil-orang">

                <a href="" class="icon">
                    <i class="fas fa-pen"></i>
                </a>

                <div class="detail-orang">
                    <img src="fotoUser/<?php echo $_SESSION['pelanggan']['foto_user'] ?>" alt="img orang" style="background-color: #fff;">
                    <h2><?php echo $_SESSION['pelanggan']['nama_user'] ?></h2>
                    <p class="email"><?php echo $_SESSION['pelanggan']['email_user'] ?></p>
                    <a href="logout.php" class="selengkapnya">Logout</a>

                </div>
            </div>

        </div>
    </section>











    <?php require "layout/footer.php" ?>


    <script src="js/script.js"></script>

    <script src="fontawesome/js/all.min.js"></script>
</body>

</html>