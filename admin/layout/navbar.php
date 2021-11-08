<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="provinsi.php">Provinsi</a></li>
	<li><a href="destinasi.php">Destinasi</a></li>
	<li><a href="penginapan.php">Penginapan</a></li>
	<li><a href="tempatMakan.php">Tempat Makan</a></li>
	<li><a href="artikel.php">Artikel</a></li>
	<li><a href="user.php">User</a></li>
	<li><a href="hubungiKami.php">Hubungi Kami</a></li>
	<li><a href="komentar.php">Komentar</a></li>
	<?php if (isset($_SESSION['admin'])) { ?>
	<li><a href="logout.php">Logout</a></li>
   <?php  }else{ ?>
	<li><a href="masuk.php">Login</a></li>
   <?php  } ?>
</ul>