<?php

include "./pengaturan/koneksi.php";
$nik = $_GET['nik'];
$query = "DELETE FROM karyawan1 WHERE nik='$nik'";
mysqli_query($koneksi, $query);
header('location:tampil.php');

?>