<?php

session_start(); //memulai membaca sesi
unset($_SESSION['nama_lengkap']); //menghapus nilai sesi yang diregistrasi
unset($_SESSION['login']);
unset($_SESSION['proses_login']);
unset($_SESSION['id_admin']);
session_destroy(); //menghancurkan sesi
header('location:./index.html'); //mendirect ke index.php

?>
