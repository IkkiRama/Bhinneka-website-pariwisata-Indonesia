    <header class="bg-white">
        <div class="container">

            <div class="menu">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <a href="index.php" class="logo">
                <h1>Bhin<span>neka</span></h1>
            </a>

            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="destinasi.php">Destinasi</a></li>
                    <li><a href="artikel.php">Artikel</a></li>
                    <li><a href="kontak.php">Kontak</a></li>
                </ul>
            </nav>


            <?php if (isset($_SESSION['pelanggan'])){ ?>
                <a href="profil.php?id=<?php echo $_SESSION['pelanggan']['id_user'] ?>"><img src="fotoUser/<?php echo $_SESSION['pelanggan']['foto_user'] ?>" class="fotoUserLogin"></a>
            <?php }else{ ?>
            <div class="auth">
                <a href="masuk.php">Masuk</a>
                <a href="daftar.php">Daftar</a>
            </div>
            <?php } ?>

        </div>
    </header>




    <nav class="navMobile">
        <ul>
            <div class="control">

                <div class="menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <h1>Code<span>Pee</span></h1>
            </div>

            <li><a href="index.php">Home</a></li>
            <li><a href="destinasi.php">Destinasi</a></li>
            <li><a href="artikel.php">Artikel</a></li>
            <li><a href="kontak.php">Kontak</a></li>


            <?php if (isset($_SESSION['pelanggan'])){ ?>
                <li><a href="logout.php">Logout</a></li>
            <?php }else{ ?>
            <div class="auth">
                <a href="">Masuk</a>
                <a href="">Daftar</a>
            </div>
            <?php } ?>
        </ul>
    </nav>
