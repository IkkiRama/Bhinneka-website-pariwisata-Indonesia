<?php
require "admin/koneksi.php";

unset($_SESSION['pelanggan']);

echo"<script>
        alert('anda berhasil logout')
        location = 'masuk.php'
    </script>";



?>