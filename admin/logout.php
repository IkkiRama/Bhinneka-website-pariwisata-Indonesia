<?php
require "koneksi.php";

unset($_SESSION['admin']);

echo"<script>
	alert('Anda berhasil logout')
	location = 'masuk.php'
</script>";




?>